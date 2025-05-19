
    const cardContainer = document.getElementById('cardContainer');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    const cards = cardContainer.querySelectorAll('[role="group"]');

    let currentIndex = 0;

    function updateButtons() {
      prevButton.disabled = currentIndex === 0;
      nextButton.disabled = currentIndex >= cards.length - 1;
    }

    function scrollToCard(index) {
      if (index >= 0 && index < cards.length) {
        cards[index].scrollIntoView({ behavior: 'smooth', inline: 'start' });
        currentIndex = index;
        updateButtons();
      }
    }

    prevButton.addEventListener('click', () => {
      if (currentIndex > 0) {
        scrollToCard(currentIndex - 1);
      }
    });

    nextButton.addEventListener('click', () => {
      if (currentIndex < cards.length - 1) {
        scrollToCard(currentIndex + 1);
      }
    });

    // Keyboard navigation
    cardContainer.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft') {
        scrollToCard(currentIndex - 1);
      } else if (e.key === 'ArrowRight') {
        scrollToCard(currentIndex + 1);
      }
    });
    updateButtons();
    cardContainer.tabIndex = 0;