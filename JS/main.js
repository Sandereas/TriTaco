function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }


const FormElement = document.querySelector('#LogInForm');

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