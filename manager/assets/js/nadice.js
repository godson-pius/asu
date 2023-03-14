const showNotification = (text) => {
    Toastify({

        text: `${text}`,

        duration: 3000,
        style: {
            background: "#84bd2e",
            borderRadius: "5px",
            width: "100%",
        }

    }).showToast();
}


if (document.querySelectorAll('#done')) {
    document.querySelectorAll('#done').forEach((el) => {
        el.onclick = () => {
            const id = el.dataset.id

            const conf = confirm('You are resolving this request?');
            if (conf) {
                fetch(`api/app.php?pending=${id}`).then(e => e).then(e => e.text()).then(e => {
                    if (e === "true") {
                        showNotification('Marked as done')
                        el.parentElement.parentElement.parentElement.remove()
                    } else {
                        alert("Failed to mark as done")
                    }
                })
            }
        }
    })
}


if (document.querySelectorAll('#delete')) {
    document.querySelectorAll('#delete').forEach((el) => {
        el.onclick = () => {
            const id = el.dataset.id

            const conf = confirm('Are you sure you want to delete this request?');
            if (conf) {
                fetch(`api/app.php?delete=${id}`).then(e => e).then(e => e.text()).then(e => {
                    if (e === "true") {
                        showNotification('Request deleted')
                        el.parentElement.parentElement.parentElement.remove()
                    } else {
                        alert("Failed to delete request")
                    }
                })
            }
        }
    })
}


if (document.querySelector('#deleteAll')) {
    document.querySelector('#deleteAll').onclick = () => {

        const conf = confirm('Are you sure you want to delete all request?');
        if (conf) {
            fetch(`api/app.php?deleteall=true`).then(e => e).then(e => e.text()).then(e => {
                if (e === "true") {
                    showNotification('Requests have been deleted')
                    window.location.reload()
                } else {
                    alert("Failed to delete all requests")
                }
            })
        }
    }
}

// fOR Messsages =================================================================

if (document.querySelectorAll('#deleteMessage')) {
    document.querySelectorAll('#deleteMessage').forEach((el) => {
        el.onclick = () => {
            const id = el.dataset.id

            const conf = confirm('Are you sure you want to delete this message?');
            if (conf) {
                fetch(`api/app.php?deleteMessage=${id}`).then(e => e).then(e => e.text()).then(e => {
                    if (e === "true") {
                        showNotification('Message deleted')
                        el.parentElement.parentElement.parentElement.remove()
                    } else {
                        alert("Failed to delete message")
                    }
                })
            }
        }
    })
}

if (document.querySelector('#deleteAllMessage')) {
    document.querySelector('#deleteAllMessage').onclick = () => {

        const conf = confirm('Are you sure you want to delete all messages?');
        if (conf) {
            fetch(`api/app.php?deleteallmessage=true`).then(e => e).then(e => e.text()).then(e => {
                if (e === "true") {
                    showNotification('Messsages have been deleted')
                    window.location.reload()
                } else {
                    alert("Failed to delete all messages")
                }
            })
        }
    }
}

if (document.querySelector('#deleteTeam')) {
    document.querySelectorAll('#deleteTeam').forEach((el) => {
        el.onclick = () => {
            const id = el.dataset.id

            const conf = confirm('Are you sure you want to delete team member?');
            if (conf) {
                fetch(`api/app.php?delete_team=true`).then(e => e).then(e => e.text()).then(e => {
                    if (e === "true") {
                        showNotification('Team member have been deleted')
                        window.location.reload()
                    } else {
                        alert("Failed to delete team member! Try again")
                    }
                })
            }
        }
    })
}

if (document.querySelector('#deletePartner')) {
    document.querySelectorAll('#deletePartner').forEach((el) => {
        el.onclick = () => {
            const id = el.dataset.id

            const conf = confirm('Are you sure you want to delete partner?');
            if (conf) {
                fetch(`api/app.php?delete-partner=true`).then(e => e).then(e => e.text()).then(e => {
                    if (e === "true") {
                        showNotification('Partner have been deleted')
                        window.location.reload()
                    } else {
                        alert("Failed to delete partner! Try again")
                    }
                })
            }
        }
    })
}