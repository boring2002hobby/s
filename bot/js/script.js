document.addEventListener('DOMContentLoaded', function () {
    const addHashtagBtn = document.getElementById('addHashtag');
    const hashtagsTextarea = document.getElementById('hashtags');
    const linkInput = document.getElementById('link');

    addHashtagBtn.addEventListener('click', function () {
        const newHashtag = prompt('Enter a new hashtag:');
        if (newHashtag) {
            addHashtag(newHashtag);
        }
    });

    linkInput.addEventListener('input', function(event) {
        const words = this.value.split(' ');
        const lastWord = words[words.length - 1];
        if (lastWord.trim() !== '' && event.data === ' ') {
            addHashtag(lastWord.trim());
            this.value = words.slice(0, -1).join(' '); // Remove the last word from the input
        }
    });

    function addHashtag(tag) {
        const hashtagSpan = document.createElement('span');
        hashtagSpan.className = 'hashtag';
        hashtagSpan.textContent = tag;

        const cancelBtn = document.createElement('button');
        cancelBtn.textContent = 'X';
        cancelBtn.addEventListener('click', function () {
            hashtagSpan.remove();
        });

        hashtagSpan.appendChild(cancelBtn);
        hashtagsTextarea.appendChild(hashtagSpan);
    }

    document.getElementById('myForm').addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        const data = {};
        for (const [key, value] of formData.entries()) {
            data[key] = value;
        }
        data['hashtags'] = Array.from(hashtagsTextarea.querySelectorAll('.hashtag')).map(tag => tag.textContent);
        console.log(data);
        // Here you can send the data to your server using AJAX or any other method
    });
});
