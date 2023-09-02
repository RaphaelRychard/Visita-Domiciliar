function calculateAge() {
    let birthdate = new Date(document.querySelector('#data_nascimento_user').value);
    let today = new Date();

    let age = today.getFullYear() - birthdate.getFullYear();

    if (today.getMonth() < birthdate.getMonth() ||
        (today.getMonth() === birthdate.getMonth() && today.getDate() < birthdate.getDate())) {
        age--;
    }

    document.querySelector('#idade_user').value = age;
}