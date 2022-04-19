(function () {
    console.log('boite_modal.js');
    const modal = document.querySelector('.modal');
    const btnsSuite = document.querySelectorAll('.cours__desc__suite');
    console.log(btnsSuite.length);
    for (const btn of btnsSuite) {
        btn.addEventListener('mousedown', () => console.log(btn));
    }
})()