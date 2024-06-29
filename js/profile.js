document.addEventListener('DOMContentLoaded', function() {
    const profileForm = document.querySelector('form');
    profileForm.addEventListener('submit', updateProfile);
});

function updateProfile(event) {
    event.preventDefault();
    
    const formData = new FormData(event.target);
    const profileData = Object.fromEntries(formData.entries());
    
    // In a real app, you'd send this data to a server
    console.log('Profile updated:', profileData);
    alert('Your profile has been updated!');
}