const editButtons = document.querySelectorAll('.btnEdit');
editButtons.forEach(editButton => {
    editButton.addEventListener('click', () => {
        document.body.style.overflow = 'hidden';
        document.querySelector('.alertEdit').style.display = 'flex';
        const id = editButton.dataset.id;
        fetch(`/post/${id}/edit`)
        .then(response => response.json())
        .then(post => {
            document.querySelector('.formPost').action = `/post/${post.id}/edit`;
            document.getElementById('category').value = post.category_id;
            document.getElementById('title').value = post.title;
            document.getElementById('slug').value = post.slug;
            document.getElementById('author').value = post.author;
            document.getElementById('date').value = post.date;
        });
    });
});

// batal edit
document.querySelector('.btnCancel').addEventListener('click', () => {
    document.body.style.overflow = 'auto';
    document.querySelector('.alertEdit').style.display = 'none';
})