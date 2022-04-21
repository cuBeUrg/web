let pageName = 'Lorem Ipsum';
let aboutUs = [
    { title: 'lorem ipsum', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec ante suscipit, hendrerit massa eu, imperdiet nibh. Praesent nec arcu in ipsum malesuada dapibus. Curabitur bibendum justo in diam mollis, eu sodales odio elementum. Aliquam et erat nisi.' },
    { title: 'lorem ipsum', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec ante suscipit, hendrerit massa eu, imperdiet nibh. Praesent nec arcu in ipsum malesuada dapibus. Curabitur bibendum justo in diam mollis, eu sodales odio elementum. Aliquam et erat nisi.'}, 
    { title: 'lorem ipsum', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec ante suscipit, hendrerit massa eu, imperdiet nibh. Praesent nec arcu in ipsum malesuada dapibus. Curabitur bibendum justo in diam mollis, eu sodales odio elementum. Aliquam et erat nisi.'},  
    { title: 'lorem ipsum', description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec ante suscipit, hendrerit massa eu, imperdiet nibh. Praesent nec arcu in ipsum malesuada dapibus. Curabitur bibendum justo in diam mollis, eu sodales odio elementum. Aliquam et erat nisi.'}
];

window.onscroll = function() { scrollFunction() };

window.addEventListener('load', (event) => {
    let pageNameElement = document.getElementById('pageName');
    pageNameElement.innerText = pageName;

    showAbout();
});

let scTop = document.getElementById("scTop");

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scTop.style.display = "block";
    } else {
        scTop.style.display = "none";
    }
};

function showAbout() {
    for (let i = 0; i < aboutUs.length; i++) {
        let aboutIndex = i;
        let aboutIndexString = aboutIndex.toString();

        let gridElement = document.getElementsByClassName('grid')[0];

        let infoElement = document.createElement('div');
        infoElement.classList.add('info');

        let leftElement = document.createElement('div');
        leftElement.classList.add('left');

        let iconElement = document.createElement('div');
        iconElement.classList.add('icon');

        iconElement.innerHTML += '<img src="./images/icon.png"></img>';

        let rightElement = document.createElement('div');
        rightElement.classList.add('right');

        let upperElement = document.createElement('div');
        upperElement.classList.add('upper');

        let upperElementSpan = document.createElement('span');
        upperElementSpan.id = 'aboutUsDescription' + aboutIndexString;
        upperElementSpan.innerText = aboutUs[i].title;

        let lowerElement = document.createElement('div');
        lowerElement.classList.add('lower');

        let lowerElementSpan = document.createElement('span');
        lowerElementSpan.id = 'aboutUs' + aboutIndexString;
        lowerElementSpan.innerText = aboutUs[i].description;

        lowerElement.append(lowerElementSpan);
        upperElement.append(upperElementSpan);

        rightElement.append(upperElement);
        rightElement.append(lowerElement);

        leftElement.append(iconElement);

        infoElement.append(leftElement);
        infoElement.append(rightElement);

        gridElement.append(infoElement);
    };
};

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
};