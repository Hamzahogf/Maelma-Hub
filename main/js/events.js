const contents = document.querySelector('.contents');
const boxlist = document.querySelector('.box-list');
const currentPage = window.location.pathname.split('/').pop(); // Extract the file name

function buildEventCard(event) {
    const boxContainer = document.createElement('div')
    boxContainer.classList.add('box-container')

    const img = document.createElement('img')
    img.classList.add('box-logo')
    img.alt = 'Club logo'
    img.src = event.club_photo
    img.style.width = '68%'
    img.style.height = 'auto'
    boxContainer.appendChild(img)

    const boxTitle = document.createElement('div')
    boxTitle.classList.add('boxtitle')
    boxTitle.textContent = event.event_name
    boxTitle.style.paddingBottom = '0'
    boxContainer.appendChild(boxTitle)

    const details = document.createElement('div')
    details.classList.add('details')
    const detailItems = [
        { class: 'organizer', icon: 'img/organizer.svg', text: event.club_name },
        { class: 'location', icon: 'img/location.svg', text: event.event_location },
        { class: 'date', icon: 'img/date.svg', text: event.event_start_date },
    ];

    detailItems.forEach(({ class: detailClass, icon, text }) => {
        const detailDiv = document.createElement('div')
        detailDiv.classList.add(detailClass, 'box')
        const detailImg = document.createElement('img')
        detailImg.src = icon
        detailImg.classList.add('indice')
        detailDiv.appendChild(detailImg)
        const span = document.createElement('span')
        span.textContent = text
        detailDiv.appendChild(span)
        details.appendChild(detailDiv)
    });

    boxContainer.appendChild(details)

    const joinButton = document.createElement('a')
    joinButton.classList.add('event-register')
    joinButton.href = `html/eventoverview.php?event_id=${event.event_id}`;
    joinButton.textContent = 'Join Now'
    boxContainer.appendChild(joinButton)

    const target = currentPage === 'home.php' ? boxlist : contents;
    target.appendChild(boxContainer)
}

function main(eventData) {
    const displayCount = currentPage === 'home.php' ? 6 : eventData.length;
    for (let i = 0; i < displayCount; i++) {
        buildEventCard(eventData[i]);
    }
}

function animateCards() {
    const cards = document.querySelectorAll(".box-container");
    cards.forEach((card, index) => {
        setTimeout(() => {
            card.style.transform = "translateY(0)";
            card.style.opacity = "1";
        }, index * 200);
    });
}

// Filter state
const filterSelections = {
    school_id: '',
    club_id: '',
    event_type_id: ''
};

// Handle form submission for filters
function handleFormSubmit(event, formType) {
    event.preventDefault();

    // Update filter state
    const filterMap = {
        school: 'school-select',
        club: 'club-select',
        type: 'type-select'
    };
    filterSelections[`${formType}_id`] = document.getElementById(filterMap[formType]).value ;

    // Fetch filtered data
    const params = new URLSearchParams(filterSelections);
    console.log(params.toString())
    fetch(`php/events_setup.php?${params}`)
        .then(response => {
            return response.json();
        })
        .then(data => {
            console.log(data)
            contents.innerHTML = ''; // Clear existing cards
            main(data);
            animateCards();
        })
        .catch(console.error);
}

if(currentPage!=='home.php'){
    ['school', 'club', 'type'].forEach(type => {
        document.getElementById(`${type}-form`).addEventListener('submit', event => handleFormSubmit(event, type));
    });    
}

document.addEventListener('click', (event) => {
    if (event.target.classList.contains('event-register')) {
        event.target.classList.add('clicked');
        setTimeout(() => event.target.classList.remove('clicked'), 300);
    }
});

main(window.eventData);
animateCards();