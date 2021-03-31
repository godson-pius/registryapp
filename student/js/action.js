const signIn = (element) => {
    let id = element.dataset.id;
    let stud = element.dataset.stud;

    fetch(`api/signin.php?id=${id}&stud=${stud}`).then(e => e).then(e => e.text()).then(e => {
        if (e == "performedAction") {
            alert('Already signed in');
        } else if (e == "signedIn") {
            alert('Signed In! Please do well to sign out!')
        } else {
            alert('Ooops! Please try again');
        }
    })
}

// For signing out
const signOut = (element) => {
    let id = element.dataset.id;
    let stud = element.dataset.stud;

    fetch(`api/signout.php?id=${id}&stud=${stud}`).then(e => e).then(e => e.text()).then(e => {
        if (e == "performAction") {
            alert('Please sign in!');
        } else if (e == "signedOut") {
            alert('Signed Out! Enjoy the rest of the day!')
        } else if (e == "Error1") {
            alert('Error1!')
        } else if (e == "Error2") {
            alert('Error2!')
        } else if (e == "Ooops!") {
            alert('Ooops! Please try again');
        }
    })
}
