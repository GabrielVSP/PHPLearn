const base = document.querySelector('base').getAttribute('href')
const forms = document.querySelectorAll('form')
const table = document.querySelector('table tbody')
const deleteBtn = document.querySelectorAll('.deleteBtn')
 

forms.forEach(form => {

    form.addEventListener('submit', (e) => {

        e.preventDefault()

        $.ajax({

            url : base+'backend/'+e.target.getAttribute('php_src'),
            type :'POST',
            data : $(e.target).serialize(),
            success : function(response) {

                response = response.match(/"([^"]+)"/)[1]

                let el = document.createElement('div')
                el.innerHTML = response
                e.target.appendChild(el)

                setInterval(() => {
                    el.remove()
                }, 2000);
                
            }

        })

        if(e.target.getAttribute('php_src') === "add-team.php") {

            setTimeout(() => {
            
                $.ajax({
    
                    url: base+'backend/'+e.target.getAttribute('php_src'),
                    type: 'GET',
                    data: 'data= 1',
                    success: function(res) {
                                                    
                        let members = JSON.parse(res)
                        res = res.match(/"([^"]+)"/)[1]
    
                        table.innerHTML = ''
    
                        members.forEach(member => {
    
                            let tr = document.createElement('tr')
    
                            tr.innerHTML =  `
                            
                                <td>${member.id}</td>
                                <td>${member.name}</td>
    
                                <td>
                                    <button class="btn btn-danger deleteBtn" name="delete-btn" element_id="${member.id}">Deletar</button>
                                </td>
                            `
    
                            table.appendChild(tr)
                            
                        })
    
    
                    }
        
                })
    
            }, 900);

        }

        $(e.target)[0].reset();

    })

})


$('body').on('click', '.deleteBtn', (e) => {

    let prompt = confirm('Tem certeza que quer deletar este usuário?')

    if (prompt) {

        $.ajax({

            url: base+'backend/delete-team.php',
            method: 'POST',
            data: 'data= '+e.target.getAttribute('element_id'),
            
        })

        setTimeout(() => {
            
            $.ajax({

                url: base+'backend/delete-team.php',
                method: 'GET',
                data: 'data= '+1,
                success: function(res) {
                    
                    let members = JSON.parse(res)

                    table.innerHTML = ''

                    members.forEach(member => {

                        let tr = document.createElement('tr')

                        tr.innerHTML =  `
                        
                            <td>${member.id}</td>
                            <td>${member.name}</td>

                            <td>
                                <button class="btn btn-danger deleteBtn" name="delete-btn" element_id="${member.id}">Deletar</button>
                            </td>
                        `

                        table.appendChild(tr)
                        
                    })


                }

            })

        }, 500);
        
    } 
})

    