const buttons = document.querySelectorAll('button');
const container = document.getElementById('video-container');

buttons.forEach(button => {
  button.addEventListener('click', () => {
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'handler.php');
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = () => {
      container.innerHTML = xhr.response;
    };
    xhr.send(`video=${button.name}`);
  });
});