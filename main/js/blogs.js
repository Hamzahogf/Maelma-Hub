const news = document.querySelector('.news')

function build_Blog(blog) {
    const card = document.createElement('div')
    card.classList.add('card')

    const block = document.createElement('div')
    block.classList.add('block')
    card.appendChild(block)

    const left = document.createElement('div')
    left.classList.add('left')
    const img = document.createElement('img')
    img.src = blog.post_photo
    img.alt = 'photo_post'
    img.style.width = '100%'
    img.style.height = '100%'
    left.appendChild(img)
    block.appendChild(left)

    const stmt = document.createElement('div')
    stmt.classList.add('stmt')
    block.appendChild(stmt)

    const content = document.createElement('div')
    content.classList.add('content')
    const h2 = document.createElement('h2')
    h2.textContent = blog.post_title
    content.appendChild(h2)
    const p = document.createElement('p')
    p.textContent = blog.post_body
    content.appendChild(p)
    stmt.appendChild(content)

    const details = document.createElement('div')
    details.classList.add('detailes')
    const r = document.createElement('p')
    r.textContent = 'by : ' + blog.club_name
    details.appendChild(r)
    const t1 = document.createElement('p')
    t1.textContent = blog.post_date
    details.appendChild(t1)
    const t2 = document.createElement('p')
    t2.textContent = blog.post_num_comments + ' comments'
    details.appendChild(t2)

    const button = document.createElement('button')
    button.classList.add('join-btn')
    button.textContent = 'Read more'
    details.appendChild(button)

    stmt.appendChild(details)

    news.insertBefore(card, news.firstChild); // Insert as the first child
}

function main() {
    window.blogsData.forEach(blog => {
        build_Blog(blog)
    });
}

main()
