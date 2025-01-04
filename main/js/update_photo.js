document.querySelector('.iconn').addEventListener('click', () => {
    const fileInput = document.getElementById('profile-pic-input');
    fileInput.click();
});

document.getElementById('profile-pic-input').addEventListener('change', async (event) => {
    const file = event.target.files[0];
    if (!file) return;

    // Validate file type and size
    const validTypes = ['image/jpeg', 'image/png', 'image/gif'];
    if (!validTypes.includes(file.type)) {
        alert('Please upload a valid image file (JPEG, PNG, or GIF)');
        return;
    }

    const maxSize = 5 * 1024 * 1024; // 5MB
    if (file.size > maxSize) {
        alert('File size must be less than 5MB');
        return;
    }

    // Show loading state
    const profileImage = document.querySelector('.pfp');
    profileImage.style.opacity = '0.5';

    const formData = new FormData();
    formData.append('profile_picture', file);
    
    try {
        const response = await fetch('http://localhost/BEHIND_THE_SCENES/main/php/upload_profile_picture.php', {
            method: 'POST',
            body: formData,
        });

        // Check if the response is JSON
        const contentType = response.headers.get('content-type');
        if (!contentType || !contentType.includes('application/json')) {
            throw new Error('Server returned non-JSON response');
        }

        const data = await response.json();
        
        if (data.success) {
            // Update the image preview
            const reader = new FileReader();
            reader.onload = (e) => {
                profileImage.src = e.target.result;
                profileImage.style.opacity = '1';
            };
            reader.readAsDataURL(file);
        } else {
            throw new Error(data.error || 'Upload failed');
        }
    } catch (error) {
        console.error('Upload error:', error);
        alert('Error uploading profile picture: ' + error.message);
        profileImage.style.opacity = '1';
    }
});

document.querySelectorAll('.put').forEach(inputField => {
    inputField.addEventListener('click', () => {
        inputField.readOnly = false;  // Make the input field editable
    });
});
