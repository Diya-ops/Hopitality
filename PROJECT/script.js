// Menu Data
const menuItems = [
    {
        id: 1,
        name: "Spring roll",
        description: "Crispy rolls filled with frsh vegetables and served  with sweet chiily sauce.",
        price: "Rs.120",
        category: "starters",
        image: "spring roll.jpg"
    },
    {
        id: 2,
        name: "Crispy corn",
        description: "Fried corn toast with spices and vegetables.",
        price: "Rs.140",
        category: "starters",
        image: "crisp-corn.jpg"
    },
    {
        id: 3,
        name: "Tomato soup",
        description: "Smooth and creamy tomato soup with herbs.",
        price: "Rs.90",
        category: "starters",
        image: "tomato-soup.jpg"
    },
    {
        id: 4,
        name: "Hot and sour soup",
        description: "Spicy and tangy soup with vegetables.",
        price: "Rs.120",
        category: "starters",
        image: "hot-and-sour-soup.jpg"
    },
    {
        id: 5,
        name: "Paneer butter masala",
        description: "Paneer cooked in rich creamy tomato gravy.",
        price: "Rs.340",
        category: "mains",
        image: "Paneer-butter.jpg"
    },
    {
        id: 6,
        name: "Veg biryani",
        description: "Basmati rice cooked with vegetables and spices",
        price: "Rs.300",
        category: "mains",
        image: "Vegetable-Biryani.jpg"
    },
    {
        id: 7,
        name: "Mix veg curry",
        description: "Curry made with seasonal vegetables.",
        price: "Rs.190",
        category: "mains",
        image: "veg-curry.jpg"
    },
    {
        id: 8,
        name: "Dal Tadka",
        description: "Lentils cooked with spices and garlic tempering.",
        price: "Rs.150",
        category: "mains",
        image: "dal-tadka.jpg"
    },
    {
        id: 9,
        name: "Butter naan",
        description: "Soft indian bread baked with butter.",
        price: "Rs.70",
        category: "mains",
        image: "butter-naan.jpg"
    },
    {
        id: 10,
        name: "Chocolate Lava Cake",
        description: "Warm chocolate cake with molten center and vanilla ice cream",
        price: "Rs.100",
        category: "desserts",
        image: "https://images.unsplash.com/photo-1624353365286-3f8d62daad51?w=400&h=300&fit=crop"
    },
    {
        id: 11,
        name: "Tiramisu",
        description: "Classic Italian dessert with espresso-soaked ladyfingers",
        price: "Rs.150",
        category: "desserts",
        image: "https://images.unsplash.com/photo-1571877227200-a0d98ea607e9?w=400&h=300&fit=crop"
    },
    {
        id: 12,
        name: "Crème Brûlée",
        description: "Vanilla custard with caramelized sugar crust",
        price: "Rs200",
        category: "desserts",
        image: "https://images.unsplash.com/photo-1470124182917-cc6e71b22ecc?w=400&h=300&fit=crop"
    },
    {
        id: 13,
        name: "Gulab Jamun",
        description: "Soft milk dumplings in sugar syrup.",
        price: "Rs.80",
        category: "desserts",
        image: "gulab-jamun.jpg"
    },
    {
        id: 14,
        name: "Rasmalai",
        description: "Paneer balls soaked in sweet milk.",
        price: "Rs.110",
        category: "desserts",
        image: "rasmalai.jpg"
    },
    {
        id: 15,
        name: "Ice cream",
        description: "Chilled desert available in many flavours.",
        price: "Rs.90",
        category: "desserts",
        image: "icecream.jpg"
    },
    {
        id: 16,
        name: "Signature Cocktail",
        description: "House special with premium spirits and fresh ingredients",
        price: "Rs.250",
        category: "drinks",
        image: "https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?w=400&h=300&fit=crop"
    },
    {
        id: 17,
        name: "Artisan Coffee",
        description: "Locally roasted espresso with frothed milk",
        price: "Rs.200",
        category: "drinks",
        image: "https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=400&h=300&fit=crop"
    }
];

// DOM Elements
const menuGrid = document.getElementById('menu-grid');
const menuTabs = document.querySelectorAll('.menu-tab');
const navbar = document.getElementById('navbar');
const mobileMenu = document.getElementById('mobile-menu');
const navMenu = document.querySelector('.nav-menu');
const reservationForm = document.getElementById('reservation-form');
const successModal = document.getElementById('success-modal');
const closeModalBtn = document.getElementById('close-modal');

// Render Menu Items
function renderMenuItems(category = 'all') {
    const filteredItems = category === 'all' 
        ? menuItems 
        : menuItems.filter(item => item.category === category);
    
    menuGrid.innerHTML = filteredItems.map(item => `
        <div class="menu-item" data-category="${item.category}">
            <div class="menu-item-image">
                <img src="${item.image}" alt="${item.name}">
                <span class="menu-item-price">${item.price}</span>
            </div>
            <div class="menu-item-content">
                <span class="menu-item-category">${item.category}</span>
                <h3>${item.name}</h3>
                <p>${item.description}</p>
                <button class="menu-item-btn" onclick="addToCart(${item.id})">
                    <i class="fas fa-plus"></i> Add to Order
                </button>
            </div>
        </div>
    `).join('');
}

// Menu Tab Click Handler
menuTabs.forEach(tab => {
    tab.addEventListener('click', () => {
        menuTabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        const category = tab.dataset.category;
        renderMenuItems(category);
    });
});

// Navbar Scroll Effect
window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Mobile Menu Toggle
mobileMenu.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    mobileMenu.classList.toggle('active');
});

// Close mobile menu when clicking a link
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('active');
        mobileMenu.classList.remove('active');
    });
});

// Reservation Form Submission
reservationForm.addEventListener('submit', (e) => {
    e.preventDefault();
    
    // Get form values
    const formData = new FormData(reservationForm);
    const data = Object.fromEntries(formData);
    
    // Show success modal
    successModal.classList.add('active');
    
    // Reset form
    reservationForm.reset();
    
    // Set default date to today
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('date').value = today;
});

// Close Modal
closeModalBtn.addEventListener('click', () => {
    successModal.classList.remove('active');
});

// Close modal when clicking outside
successModal.addEventListener('click', (e) => {
    if (e.target === successModal) {
        successModal.classList.remove('active');
    }
});

// Add to Cart Function
function addToCart(itemId) {
    const item = menuItems.find(i => i.id === itemId);
    alert(`${item.name} added to your order!`);
}

// Set minimum date for reservation
document.addEventListener('DOMContentLoaded', () => {
    const dateInput = document.getElementById('date');
    const today = new Date().toISOString().split('T')[0];
    dateInput.setAttribute('min', today);
    dateInput.value = today;
    
    // Render initial menu
    renderMenuItems();
});

// Smooth scroll for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Newsletter form handler
document.querySelector('.newsletter-form').addEventListener('submit', (e) => {
    e.preventDefault();
    const email = e.target.querySelector('input').value;
    alert(`Thank you for subscribing with ${email}!`);
    e.target.querySelector('input').value = '';
});

