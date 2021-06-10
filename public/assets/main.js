console.log('page ready!');

const deleteButtons = document.getElementsByClassName("employees-delete-button");

Array.from(deleteButtons).forEach(element =>{
    element.addEventListener('click', () =>{
        let person =JSON.parse(element.dataset.person);
        console.log(person);
        if(window.confirm('¿Quiere Borrar a '+person.name+'?')){
            console.log('Borrar');
            fetch('/employees_delete.php',{
                method: 'DELETE',
                body: element.dataset.person
            })
            .then(response => response.json())
            .then(data => {
                if(data.status === 'success') {
                    window.location.replace('/employees.php?message=' + encodeURIComponent(data.message))
                }else {
                    alert(data.message);
                }
            });
        }
    });
});
