const signIn = (element) => {
    let id = element.dataset.id;
    let stud = element.dataset.stud;

    fetch(`api/actions.php?id=${id}&stud=${stud}`).then(e => e).then(e => e.text()).then(e => {
        if (e == "performedAction") {
            alert('Already signed in');
        } else if (e == "signedIn") {
            alert('Signed In! Please do well to sign out!')
        } else {
            alert('Ooops! Please try again');
        }
    })
}
