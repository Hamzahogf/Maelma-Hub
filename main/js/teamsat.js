var team_class_big= document.querySelector('.container-teams')
var teamsat_bad = document.querySelector('#teamsatData').value



const TeamIds = [...new Set(teamsat_bad.split(';').map(entry => entry.split(':*')[0]))];

const teamsat_matrix= teamsat_bad.split(';').map(entry=> { 
    const [team_id,user_name, speci_name , role_name ,team_name, event_link]= entry.split(':*');
    return {team_id,user_name, speci_name , role_name ,team_name,event_link};
});

var i=0
var j=0
function get_the_matrix(matrix){
    var members =[]

    while(j < matrix.length && matrix[j].team_id == TeamIds[i]){
        members.push(matrix[j]);
        j++;
    }
    i++
    return members;
}

function createTeam(teamName, members) {
    const teamDiv = document.createElement('div');
    teamDiv.classList.add('team');
    
    const teamNameDiv = document.createElement('div');
    teamNameDiv.classList.add('teamname');
    teamNameDiv.textContent = teamName;
    teamDiv.appendChild(teamNameDiv);

    const teamContainer = document.createElement('div');
    teamContainer.classList.add('teamcontainer');
    teamDiv.appendChild(teamContainer);

    const teamSection = document.createElement('div');
    teamSection.classList.add('teamsection');
    teamSection.style.display = 'block';
    teamContainer.appendChild(teamSection);

    const teamTitle = document.createElement('div');
    teamTitle.classList.add('team-title');
    teamTitle.textContent = 'Members';
    teamSection.appendChild(teamTitle);

    const membersDiv = document.createElement('div');
    membersDiv.classList.add('members');
    teamSection.appendChild(membersDiv);

    members.forEach(member => {
        const memberDiv = document.createElement('div');
        memberDiv.classList.add('member');


        const nameDiv = document.createElement('div');
        nameDiv.classList.add('name');
        nameDiv.textContent = member.user_name;
        memberDiv.appendChild(nameDiv);

        const roleDiv = document.createElement('div');
        roleDiv.classList.add('role');
        roleDiv.textContent = member.role_name;
        memberDiv.appendChild(roleDiv);

        const speciDiv = document.createElement('div');
        speciDiv.classList.add('role');
        speciDiv.textContent = member.speci_name;
        memberDiv.appendChild(speciDiv);

        membersDiv.appendChild(memberDiv);
        event_link=member.event_link
    });

    const divv=document.createElement('div')
    
    let deleteButton = document.createElement('button');
    deleteButton.classList.add('button');
    deleteButton.textContent = 'quit';
    divv.appendChild(deleteButton);

    deleteButton=document.createElement('a')

    deleteButton.href=event_link 
    deleteButton.classList.add('button');
    deleteButton.textContent = 'Looby';
    divv.appendChild(deleteButton);
    teamDiv.appendChild(divv)
    divv.style.display='flex'
    team_class_big.appendChild(teamDiv);
}

function DO_it(){
    var wiw = get_the_matrix(teamsat_matrix)
    while(wiw.length > 0 ){
        createTeam(wiw[0].team_name, wiw)
        wiw = get_the_matrix(teamsat_matrix)
    }
}

if(teamsat_matrix.length>1){
    let sb = document.querySelector('.subheading')
    let p = document.createElement('p')
    p.innerHTML ="(You will be removed from the teams you delete)"
    sb.insertAdjacentElement('afterend',p)
    DO_it();
}
