const contents = document.querySelector('.contents');

function build_club_card(club_photo, club_name, specialities, school_name) {
    const box_container = document.createElement('div');
    box_container.classList.add('box-container');

    const img = document.createElement('img');
    img.classList.add('box-logo');
    img.src = club_photo; 
    img.alt = 'Club logo';
    img.style.width='70%'
    img.style.height='auto'
    box_container.appendChild(img);

    const boxtitle = document.createElement('div');
    boxtitle.classList.add('boxtitle');
    boxtitle.textContent = club_name;
    box_container.appendChild(boxtitle);

    const details = document.createElement('div');
    details.classList.add('details');

    // Specialities
    const specBox = document.createElement('div');
    specBox.classList.add('interest', 'box');
    const specIcon = document.createElement('img');
    specIcon.classList.add('indice');
    specIcon.src = 'img/clubinterest.svg';
    const specText = document.createElement('span');
    specText.textContent = specialities;
    specBox.append(specIcon, specText);
    
    // School
    const locationBox = document.createElement('div');
    locationBox.classList.add('location', 'box');
    const locationIcon = document.createElement('img');
    locationIcon.classList.add('indice');
    locationIcon.src = 'img/location.svg';
    const locationText = document.createElement('span');
    locationText.textContent = school_name;
    locationBox.append(locationIcon, locationText);

    details.append(specBox, locationBox);
    box_container.appendChild(details);

    // Join button
    const joinLink = document.createElement('a');
    joinLink.classList.add('event-register');
    joinLink.href = '#';
    joinLink.textContent = 'Join Now';
    box_container.appendChild(joinLink);

    contents.appendChild(box_container);
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

function loadClubs(clubs) {
    contents.innerHTML = ''; // Clear existing content
    clubs.forEach(club => {
        build_club_card(
            club.club_photo,
            club.club_name,
            club.specialities,
            club.school_name
        );
    });
}

// Load initial data
    loadClubs(window.clubsData);


document.getElementById('search-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const schoolId = document.getElementById('options').value;
    if (!schoolId) return;


    fetch(`php/clubs_setup.php?school_id=${schoolId}`)
        .then(response => {

            return response.json();
        })
        .then(data => {
            loadClubs(data);
            animateCards();

        })
        .catch(error => {
            console.error('Error:', error);
        });
});