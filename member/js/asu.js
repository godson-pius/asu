
const likePost = (el) => {
    let liked = el.dataset.liked
    let member = el.dataset.member
    let type = el.dataset.type

    fetch(`app?like=true&type=${type}&member=${member}&liked=${liked}`).then(e => e).then(e => e.text()).then(e => {
        if (e == 'true') {
            el.className = 'btn btn-primary btn-sm'
            el.innerHTML = 'Liked'
            getPostTotalCount()
        } else if (e == 'liked') {
            el.className = 'btn btn-primary btn-sm'
            el.innerHTML = 'Liked'
        } else {
            alert('Post Not Liked')
        }
    })
}

const getPostTotalCount = () => {
    fetch(`app?count=true`).then(e => e).then(e => e.text()).then(e => {
        document.getElementById('total').innerHTML = `${e} likes`
    })
}

// setInterval(() => {
//     getPostTotalCount()
// }, 5000)