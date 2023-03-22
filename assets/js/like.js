const likePost = (el) => {
    let liked = el.dataset.liked
    let member = el.dataset.member
    let type = el.dataset.type

    fetch(`member/app?like=true&type=${type}&member=${member}&liked=${liked}`).then(e => e).then(e => e.text()).then(e => {
        if (e == 'true') {
            el.className = 'fa fa-thumbs-up'
            getPostTotalCount()
        } else if (e == 'liked') {
            el.className = 'fa fa-thumbs-up'
        } else {
            alert('Post Not Liked')
        }
    })
}

const getPostTotalCount = () => {
    fetch(`member/app?count=true`).then(e => e).then(e => e.text()).then(e => {
        document.getElementById('total').innerHTML = `${e} liked`
    })
}