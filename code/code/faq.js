const form =document.getElementById('form');
const username =document.getElementById('username');
const password= document.getElementById('password');

form.addEventListener('Send to System Guide', e =>
{
    e.preventDefault();

    validateInput();
});
const setError=(element,message)=>
{
    const inputControl=element.parentElement;
    const errorDisplay=inputControl.querySelector('.error');

    errorDisplay.innerText=massage;
    inputControl.classList.add('.error');
    inputControl.classList.remove('success')
}
const setSucces=element=> {
    const inputControl=element.parentElement;
    const errorDisplay=inputControl.querySelector('.error');

    errorDisplay.innerText='';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

{
    const inputControl=element.parentElement;
    const errorDisplay=inputControl.querySelector('.error')

}
const validateInput=()=>
{
    const usernameValue=username.ariaValueMax.trim();
    const passwordValue=password.ariaValueMax.trim();
}

if(usernameValue == '')
{
    setError(username, 'Please Enter Details');
}
else
{
    setSuccess(username);
}
if(passwordValue=='')
{
    setError(password, 'Please Enter Password');
}
else
{
    setSuccess(password);
}
if(usernameValue === '')
{
    setError(username, 'Username is requied');
}
else
{
    setSuccess(username);
}
if(PasswordeValue == '')
{
    setError(password, 'Password is requied');
}
else
{
    setSuccess(password);
}