document.addEventListener('DOMContentLoaded', () => {
    const learnMoreBtn = document.getElementById('learn-more-btn');
    
    if (learnMoreBtn) {
        learnMoreBtn.addEventListener('click', () => {
            window.location.href = '/about-as.php'; 
        });
    }
});
