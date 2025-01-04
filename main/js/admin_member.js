var contents = document.querySelector('.contents')

function build_member_card(member) {
    const boxContainer = document.createElement('div')    
    boxContainer.classList.add('box-container')
    boxContainer.style.justifyContent='normal'
    const imgLogo = document.createElement('img')
    imgLogo.src = member.user_photo
    imgLogo.alt = 'logo'
    imgLogo.classList.add('box-logo')
    boxContainer.appendChild(imgLogo)

    const boxtitle = document.createElement('div')
    boxtitle.classList.add('boxtitle')
    boxtitle.textContent = member.user_name + ' ' + member.user_fullname
    boxtitle.style.paddingBottom='12px'
    boxContainer.appendChild(boxtitle)

    const detailsDiv = document.createElement('div')
    detailsDiv.classList.add('details')

    const interestDiv = document.createElement('div')
    interestDiv.classList.add('interest', 'box')
    const interestImg = document.createElement('img')
    interestImg.src = 'img/clubinterest.svg'
    interestImg.alt = ''
    interestImg.classList.add('indice')
    interestDiv.appendChild(interestImg)
    const interestText = document.createElement('span')
    interestText.textContent = member.specialities
    interestDiv.appendChild(interestText)
    detailsDiv.appendChild(interestDiv)

    const locationDiv1 = document.createElement('div')
    locationDiv1.classList.add('location', 'box')
    const locationImg1 = document.createElement('img')
    locationImg1.src = 'img/location.svg'
    locationImg1.alt = ''
    locationImg1.classList.add('indice')
    locationDiv1.appendChild(locationImg1)
    const locationText1 = document.createElement('span')
    locationText1.textContent = member.school_name
    locationDiv1.appendChild(locationText1)
    detailsDiv.appendChild(locationDiv1)

    const locationDiv2 = document.createElement('div')
    locationDiv2.classList.add('location', 'box')
    const locationImg2 = document.createElement('img')
    locationImg2.src = 'img/role.svg'
    locationImg2.alt = ''
    locationImg2.classList.add('indice')
    locationDiv2.appendChild(locationImg2)
    const locationText2 = document.createElement('span')
    locationText2.textContent = member.role_name
    locationDiv2.appendChild(locationText2)
    detailsDiv.appendChild(locationDiv2)

    const locationDiv3 = document.createElement('div')
    locationDiv3.classList.add('location', 'box')
    const locationImg3 = document.createElement('img')
    locationImg3.src = 'img/organizer.svg'
    locationImg3.alt = ''
    locationImg3.classList.add('indice')
    locationDiv3.appendChild(locationImg3)
    const locationText3 = document.createElement('span')
    locationText3.textContent = member.dept_name
    locationDiv3.appendChild(locationText3)
    detailsDiv.appendChild(locationDiv3)

    const locationDiv4 = document.createElement('div')
    locationDiv4.classList.add('location', 'box')
    const locationImg4 = document.createElement('img')
    locationImg4.src = 'img/calendar-day.svg'
    locationImg4.alt = ''
    locationImg4.classList.add('indice')
    locationDiv4.appendChild(locationImg4)
    const locationText4 = document.createElement('span')
    locationText4.textContent = member.joined_since
    locationDiv4.appendChild(locationText4)
    detailsDiv.appendChild(locationDiv4)

    boxContainer.appendChild(detailsDiv)

    contents.appendChild(boxContainer)
}

function loadmember(members) {
    members.forEach(member => {
        build_member_card(member);
    });
}

    loadmember(window.memberss);
