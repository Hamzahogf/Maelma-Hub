var team_event_class_big = document.querySelector('.teams-container')
var team_eventsatElement = document.querySelector('#teamsat_event')

if (team_eventsatElement) {
    const teamsat_event = JSON.parse(team_eventsatElement.value)

    function build_team_event(team) {
        var teamElement = document.createElement('div')
        teamElement.classList.add('team')

        var teamname = document.createElement('div')
        teamname.classList.add('teamname')
        teamname.textContent = team.team_name
        teamElement.appendChild(teamname)

        var teamcontainer = document.createElement('div')
        teamcontainer.classList.add('teamcontainer')

        var teamsection = document.createElement('div')
        teamsection.classList.add('teamsection')
        teamsection.style.display = 'block'

        var team_title = document.createElement('div');
        team_title.classList.add('team-title');
        team_title.textContent = 'Members';
        teamsection.appendChild(team_title);

        var members = document.createElement('div');
        members.classList.add('members');

        // Process members, roles, and specialities
        const membersArray = team.members.split(", ");
        const rolesArray = team.roles.split(", ");
        const specialitiesArray = team.specialities.split(", ");

        const structuredArray = membersArray.map((member, index) => [
            member,
            rolesArray[index],
            specialitiesArray[index]
        ]);

        structuredArray.forEach(user => {
            var member = document.createElement('div')
            member.classList.add('member')

            var name = document.createElement('div')
            name.classList.add('name')
            name.textContent = user[0]
            member.appendChild(name)

            var role = document.createElement('div')
            role.classList.add('role')
            role.textContent = user[1]
            member.appendChild(role)

            var speci = document.createElement('div')
            speci.classList.add('role')
            speci.textContent = user[2]
            member.appendChild(speci)

            members.appendChild(member)
        });

        teamsection.appendChild(members)
        teamcontainer.appendChild(teamsection)

        teamsection = document.createElement('div')
        teamsection.classList.add('teamsection')

        team_title = document.createElement('div')
        team_title.classList.add('team-title')
        team_title.textContent = 'Demanded Specialities:'
        teamsection.appendChild(team_title)

        var demanded = document.createElement('div')
        var role = document.createElement('div')
        role.classList.add('role')
        role.textContent = team.speci_demanded
        demanded.appendChild(role)
        teamsection.appendChild(demanded)

        teamcontainer.appendChild(teamsection)

        teamsection = document.createElement('div')
        teamsection.classList.add('teamsection')

        team_title = document.createElement('div')
        team_title.classList.add('team-title')
        team_title.textContent = 'Demanded Number:'
        teamsection.appendChild(team_title)

        demanded = document.createElement('div')
        demanded.classList.add('demanded')

        role = document.createElement('div')
        role.classList.add('role')
        role.textContent = team.num_demanded
        demanded.appendChild(role)
        teamsection.appendChild(demanded)

        teamcontainer.appendChild(teamsection)

        teamElement.appendChild(teamcontainer)
        
        var form= document.createElement('form');
        form.action='php/send_invitation_setup.php'
        form.method='POST'
        var inputted= document.createElement('input')
        inputted.type="hidden"
        inputted.name="team_id"
        inputted.value=team.team_id 
        form.appendChild(inputted)
        inputted= document.createElement('input')
        inputted.type="hidden"
        inputted.name="event_id"
        inputted.value=team.team_event 
        form.appendChild(inputted)
        var button = document.createElement('button')  
        button.classList.add('button')
        button.textContent = 'Send Invite'
        button.innerHTML = 'Send Invite'
        button.type="submit"
        if(Object.keys(team).length==9 && team.status!=""){
            button.textContent = team.status
            if(team.status == "pending"){
              button.type="button"
              button.disabled = true;
            }else if(team.status == "accepted"){
                button.style.backgroundColor='green'
                button.disabled = true;

            } else if (team.status == "rejected"){
                button.style.backgroundColor='red'
                button.disabled = true;
            }
        }
        form.appendChild(button)
        teamElement.appendChild(form)

        team_event_class_big.appendChild(teamElement)
    }

    function main() {
        teamsat_event.forEach((team) => {
            build_team_event(team)
        });
    }

    main()
}
