// Menu Data
const menuItems = [
    {
        id: 1,
        name: "Truffle Arancini",
        description: "Crispy risotto balls with black truffle and mozzarella",
        price: "$14",
        category: "starters",
        image: "https://images.unsplash.com/photo-1541014741259-de529411b96a?w=400&h=300&fit=crop"
    },
    {
        id: 2,
        name: "Burrata Salad",
        description: "Fresh burrata with heirloom tomatoes and basil pesto",
        price: "$16",
        category: "starters",
        image: "https://images.unsplash.com/photo-1608897013039-887f21d8c804?w=400&h=300&fit=crop"
    },
    {
        id: 3,
        name: "Tuna Tartare",
        description: "Fresh ahi tuna with avocado and sesame ginger dressing",
        price: "$18",
        category: "starters",
        image: "https://images.unsplash.com/photo-1534604973900-c43ab4c2e0ab?w=400&h=300&fit=crop"
    },
    {
        id: 4,
        name: "Wagyu Ribeye",
        description: "Premium A5 wagyu with roasted vegetables and red wine reduction",
        price: "$65",
        category: "mains",
        image: "https://images.unsplash.com/photo-1558030006-450675393462?w=400&h=300&fit=crop"
    },
    {
        id: 5,
        name: "Pan-Seared Salmon",
        description: "Atlantic salmon with lemon butter sauce and asparagus",
        price: "$34",
        category: "mains",
        image: "https://images.unsplash.com/photo-1467003909585-2f8a72700288?w=400&h=300&fit=crop"
    },
    {
        id: 6,
        name: "Lobster Risotto",
        description: "Creamy arborio rice with butter-poached lobster tail",
        price: "$42",
        category: "mains",
        image: "https://images.unsplash.com/photo-1534422298391-e4f8c172dddb?w=400&h=300&fit=crop"
    },
    {
        id: 7,
        name: "Truffle Pasta",
        description: "Fresh fettuccine with black truffle and parmesan cream",
        price: "$28",
        category: "mains",
        image: "https://images.unsplash.com/photo-1473093295043-cdd812d0e601?w=400&h=300&fit=crop"
    },
    {
        id: 8,
        name: "Chocolate Lava Cake",
        description: "Warm chocolate cake with molten center and vanilla ice cream",
        price: "$12",
        category: "desserts",
        image: "https://images.unsplash.com/photo-1624353365286-3f8d62daad51?w=400&h=300&fit=crop"
    },
    {
        id: 9,
        name: "Tiramisu",
        description: "Classic Italian dessert with espresso-soaked ladyfingers",
        price: "$10",
        category: "desserts",
        image: "https://images.unsplash.com/photo-1571877227200-a0d98ea607e9?w=400&h=300&fit=crop"
    },
    {
        id: 10,
        name: "Crème Brûlée",
        description: "Vanilla custard with caramelized sugar crust",
        price: "$11",
        category: "desserts",
        image: "https://images.unsplash.com/photo-1470124182917-cc6e71b22ecc?w=400&h=300&fit=crop"
    },
    {
        id: 11,
        name: "Signature Cocktail",
        description: "House special with premium spirits and fresh ingredients",
        price: "$15",
        category: "drinks",
        image: "https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?w=400&h=300&fit=crop"
    },
    {
        id: 12,
        name: "Artisan Coffee",
        description: "Locally roasted espresso with frothed milk",
        price: "$6",
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

