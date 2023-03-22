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

            const conf = confirm('Are you sure you want to delete this news?');
            if (conf) {
                fetch(`api/app.php?delete=${id}`).then(e => e).then(e => e.text()).then(e => {
                    if (e === "true") {
                        showNotification('News deleted')
                        el.parentElement.parentElement.parentElement.remove()
                    } else {
                        alert("Failed to delete news! Please try again")
                    }
                })
            }
        }
    })
}


if (document.querySelector('#deleteAll')) {
    document.querySelector('#deleteAll').onclick = () => {

        const conf = confirm('Are you sure you want to delete all news?');
        if (conf) {
            fetch(`api/app.php?deleteall=true`).then(e => e).then(e => e.text()).then(e => {
                if (e === "true") {
                    showNotification('News cleared')
                    window.location.reload()
                } else {
                    alert("Failed to delete all news! Try again")
                }
            })
        }
    }
}

// fOR events =============================================================================
if (document.querySelector('#deleteAllEvent')) {
    document.querySelector('#deleteAllEvent').onclick = () => {

        const conf = confirm('Are you sure you want to delete all events?');
        if (conf) {
            fetch(`api/app.php?deleteallevent=true`).then(e => e).then(e => e.text()).then(e => {
                if (e === "true") {
                    showNotification('Events cleared')
                    window.location.reload()
                } else {
                    alert("Failed to delete all events! Try again")
                }
            })
        }
    }
}

if (document.querySelectorAll('#deleteEvent')) {
    document.querySelectorAll('#deleteEvent').forEach((el) => {
        el.onclick = () => {
            const id = el.dataset.id

            const conf = confirm('Are you sure you want to delete this event?');
            if (conf) {
                fetch(`api/app.php?deleteevent=${id}`).then(e => e).then(e => e.text()).then(e => {
                    if (e === "true") {
                        showNotification('Event deleted')
                        el.parentElement.parentElement.parentElement.remove()
                    } else {
                        alert("Failed to delete event! Please try again")
                    }
                })
            }
        }
    })
}

// fOR Devotions =================================================================
if (document.querySelectorAll('#deletealldev')) {
    document.querySelectorAll('#deletealldev').forEach((el) => {
        el.onclick = () => {
            const conf = confirm('Are you sure you want to delete all devotion?');
            if (conf) {
                fetch(`api/app.php?deleteAllDev=true`).then(e => e).then(e => e.text()).then(e => {
                    if (e === "true") {
                        showNotification('Devotion deleted')
                        el.parentElement.parentElement.parentElement.remove()
                    } else {
                        alert("Failed to delete devotion! Please try again")
                    }
                })
            }
        }
    })
}

if (document.querySelectorAll('#deleteDev')) {
    document.querySelectorAll('#deleteDev').forEach((el) => {
        el.onclick = () => {
            const id = el.dataset.id

            const conf = confirm('Are you sure you want to delete this devotion?');
            if (conf) {
                fetch(`api/app.php?deleteDev=${id}`).then(e => e).then(e => e.text()).then(e => {
                    if (e === "true") {
                        showNotification('devotion deleted')
                        el.parentElement.parentElement.parentElement.remove()
                    } else {
                        alert("Failed to delete devotion")
                    }
                })
            }
        }
    })
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

// fOR Members =================================================================

if (document.querySelectorAll('#approveMember')) {
    document.querySelectorAll('#approveMember').forEach((el) => {
        el.onclick = () => {
            const id = el.dataset.id

            const conf = confirm('Are you sure you want to approve member?');
            if (conf) {
                fetch(`api/app.php?approveMember=${id}`).then(e => e).then(e => e.text()).then(e => {
                    if (e === "true") {
                        showNotification('Member approved')
                        el.parentElement.parentElement.parentElement.remove()
                    } else {
                        alert("Failed to approve member")
                    }
                })
            }
        }
    })
}

if (document.querySelectorAll('#delMember')) {
    document.querySelectorAll('#delMember').forEach((el) => {
        el.onclick = () => {
            const id = el.dataset.id

            const conf = confirm('Are you sure you want to delete member?');
            if (conf) {
                fetch(`api/app.php?delMember=${id}`).then(e => e).then(e => e.text()).then(e => {
                    if (e === "true") {
                        showNotification('Member deleted')
                        el.parentElement.parentElement.parentElement.remove()
                    } else {
                        alert("Failed to delete member")
                    }
                })
            }
        }
    })
}