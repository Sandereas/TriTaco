var modal = document.getElementById('LoginForm');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
const FormElement = document.querySelector('#RM1');

  FormElement.addEventListener('submit', (e) => {

      const username = document.querySelector('#UserName').value;
      const password = document.querySelector('#UserPassword').value;

      if (password == '' || username == '') {

          e.preventDefault();
          alert('Please enter a username and password');
      }

      else{
          
      }

  });