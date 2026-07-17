/* ==========================================
   PRODUCT DATA
========================================== */

const products = [
  // ---------- FASHION ----------
  {
    id: 5,
    category: 'Fashion',
    name: 'Everyday Denim Jacket',
    price: 449,
    desc: 'A classic mid-wash denim jacket built for every season.',
    details: [
      'Sizes: S – XXL',
      'Material: 100% cotton denim',
      'Care: machine wash cold'
    ],
    images: [
      'https://picsum.photos/seed/denim1/500/400',
      'https://picsum.photos/seed/denim2/500/400',
      'https://picsum.photos/seed/denim3/500/400'
    ]
  },
  {
    id: 6,
    category: 'Fashion',
    name: 'Linen Summer Shirt',
    price: 299,
    desc: 'Breathable linen shirt, perfect for hot Highveld afternoons.',
    details: [
      'Sizes: S – XL',
      'Material: 100% linen',
      'Fit: relaxed'
    ],
    images: [
      'https://picsum.photos/seed/linen1/500/400',
      'https://picsum.photos/seed/linen2/500/400',
      'https://picsum.photos/seed/linen3/500/400'
    ]
  },
  {
    id: 7,
    category: 'Fashion',
    name: 'Ankara Print Wrap Dress',
    price: 389,
    desc: 'A vibrant wrap dress in bold local Ankara print, made by a Joburg designer.',
    details: [
      'Sizes: XS – XXL',
      'Material: cotton blend',
      'Designer: local, hand-cut'
    ],
    images: [
      'https://picsum.photos/seed/ankara1/500/400',
      'https://picsum.photos/seed/ankara2/500/400',
      'https://picsum.photos/seed/ankara3/500/400'
    ]
  },
  {
    id: 8,
    category: 'Fashion',
    name: 'Everyday Running Sneakers',
    price: 699,
    desc: 'Lightweight, cushioned sneakers built for daily wear and light runs.',
    details: [
      'Sizes: 4 – 11 (UK)',
      'Sole: EVA foam',
      'Weight: 260g per shoe'
    ],
    images: [
      'https://picsum.photos/seed/sneaker1/500/400',
      'https://picsum.photos/seed/sneaker2/500/400',
      'https://picsum.photos/seed/sneaker3/500/400'
    ]
  },

  // ---------- WELLNESS ----------
  {
    id: 9,
    category: 'Wellness',
    name: 'Vitamin C Immunity Boost',
    price: 129,
    desc: 'High-strength vitamin C tablets to support your everyday immunity.',
    details: [
      'Count: 60 tablets',
      'Dosage: 1 per day',
      'Non-prescription'
    ],
    images: [
      'https://picsum.photos/seed/vitc1/500/400',
      'https://picsum.photos/seed/vitc2/500/400',
      'https://picsum.photos/seed/vitc3/500/400'
    ]
  },
  {
    id: 10,
    category: 'Wellness',
    name: 'Home First Aid Kit',
    price: 249,
    desc: 'A complete first aid kit for everyday home and travel emergencies.',
    details: [
      'Pieces: 42',
      'Case: water-resistant',
      'Includes: bandages, antiseptic, gloves'
    ],
    images: [
      'https://picsum.photos/seed/firstaid1/500/400',
      'https://picsum.photos/seed/firstaid2/500/400',
      'https://picsum.photos/seed/firstaid3/500/400'
    ]
  },
  {
    id: 11,
    category: 'Wellness',
    name: 'Digital Thermometer',
    price: 89,
    desc: 'Fast, accurate digital thermometer with a soft-tip sensor.',
    details: [
      'Reading time: 10 seconds',
      'Memory: last reading',
      'Battery included'
    ],
    images: [
      'https://picsum.photos/seed/thermo1/500/400',
      'https://picsum.photos/seed/thermo2/500/400',
      'https://picsum.photos/seed/thermo3/500/400'
    ]
  },
  {
    id: 12,
    category: 'Wellness',
    name: 'Muscle & Joint Relief Gel',
    price: 75,
    desc: 'A cooling topical gel for muscle aches, joint pain, and stiffness.',
    details: [
      'Volume: 100ml',
      'Application: 2 – 3 times daily',
      'Non-greasy formula'
    ],
    images: [
      'https://picsum.photos/seed/gel1/500/400',
      'https://picsum.photos/seed/gel2/500/400',
      'https://picsum.photos/seed/gel3/500/400'
    ]
  },

  // ---------- FRAGRANCE ----------
  {
    id: 13,
    category: 'Fragrance',
    name: 'Amber Oud Eau de Parfum',
    price: 599,
    desc: 'A rich, warm oud fragrance with amber and sandalwood undertones.',
    details: [
      'Volume: 50ml',
      'Concentration: EDP',
      'Longevity: 8+ hours'
    ],
    images: [
      'https://picsum.photos/seed/amber1/500/400',
      'https://picsum.photos/seed/amber2/500/400',
      'https://picsum.photos/seed/amber3/500/400'
    ]
  },
  {
    id: 14,
    category: 'Fragrance',
    name: 'Citrus Bloom Cologne',
    price: 349,
    desc: 'A fresh, zesty cologne with notes of bergamot and neroli.',
    details: [
      'Volume: 100ml',
      'Concentration: EDT',
      'Best for: daytime wear'
    ],
    images: [
      'https://picsum.photos/seed/citrus1/500/400',
      'https://picsum.photos/seed/citrus2/500/400',
      'https://picsum.photos/seed/citrus3/500/400'
    ]
  },
  {
    id: 15,
    category: 'Fragrance',
    name: 'Rose Musk Body Mist',
    price: 149,
    desc: 'A light, everyday body mist with soft rose and musk notes.',
    details: [
      'Volume: 200ml',
      'Concentration: body mist',
      'Alcohol-light formula'
    ],
    images: [
      'https://picsum.photos/seed/rose1/500/400',
      'https://picsum.photos/seed/rose2/500/400',
      'https://picsum.photos/seed/rose3/500/400'
    ]
  },
  {
    id: 16,
    category: 'Fragrance',
    name: 'Sandalwood Discovery Set',
    price: 259,
    desc: 'A set of three travel-size sandalwood fragrances to find your favourite.',
    details: [
      'Set of: 3 x 15ml',
      'Concentration: EDP',
      'Great for: gifting'
    ],
    images: [
      'https://picsum.photos/seed/sandal1/500/400',
      'https://picsum.photos/seed/sandal2/500/400',
      'https://picsum.photos/seed/sandal3/500/400'
    ]
  },

  // ---------- HOME ----------
  {
    id: 17,
    category: 'Home',
    name: 'Reusable Grocery Tote Set',
    price: 119,
    desc: 'A set of durable, foldable totes for grocery runs and daily errands.',
    details: [
      'Set of: 3 totes',
      'Material: recycled canvas',
      'Machine washable'
    ],
    images: [
      'https://picsum.photos/seed/tote1/500/400',
      'https://picsum.photos/seed/tote2/500/400',
      'https://picsum.photos/seed/tote3/500/400'
    ]
  },
  {
    id: 18,
    category: 'Home',
    name: 'Scented Soy Candle',
    price: 159,
    desc: 'A slow-burning soy candle with warm vanilla and fynbos notes.',
    details: [
      'Burn time: 40+ hours',
      'Wax: 100% soy',
      'Jar: reusable glass'
    ],
    images: [
      'https://picsum.photos/seed/candle1/500/400',
      'https://picsum.photos/seed/candle2/500/400',
      'https://picsum.photos/seed/candle3/500/400'
    ]
  }
];

const dealProducts = [
  {
    name: 'Vitamin C Immunity Boost',
    category: 'Wellness',
    originalPrice: 129,
    dealPrice: 65,
    daysPastExpiry: 6,
    image: 'https://picsum.photos/seed/vitc1/400/320'
  },
  {
    name: 'Muscle & Joint Relief Gel',
    category: 'Wellness',
    originalPrice: 75,
    dealPrice: 40,
    daysPastExpiry: 10,
    image: 'https://picsum.photos/seed/gel1/400/320'
  },
  {
    name: 'Citrus Bloom Cologne',
    category: 'Fragrance',
    originalPrice: 349,
    dealPrice: 199,
    daysPastExpiry: 15,
    image: 'https://picsum.photos/seed/citrus1/400/320'
  },
  {
    name: 'Rose Musk Body Mist',
    category: 'Fragrance',
    originalPrice: 149,
    dealPrice: 90,
    daysPastExpiry: 4,
    image: 'https://picsum.photos/seed/rose1/400/320'
  },
  {
    name: 'Scented Soy Candle',
    category: 'Home',
    originalPrice: 159,
    dealPrice: 90,
    daysPastExpiry: 20,
    image: 'https://picsum.photos/seed/candle1/400/320'
  }
];

const categories = [
  'All',
  'Fashion',
  'Wellness',
  'Fragrance',
  'Home'
];

let activeFilter = 'All';


/* ==========================================
   FILTER BUTTONS
========================================== */

function renderFilters() {
  const row = document.getElementById('filterRow');

  if (!row) {
    return;
  }

  row.innerHTML = '';

  categories.forEach(function (cat) {
    const btn = document.createElement('button');

    btn.className =
      'filter-btn' +
      (cat === activeFilter ? ' active' : '');

    btn.textContent = cat;

    btn.onclick = function () {
      setFilter(cat);
    };

    row.appendChild(btn);
  });
}

function setFilter(cat) {
  activeFilter = categories.includes(cat) ? cat : 'All';

  renderFilters();
  renderProducts();
}


/* ==========================================
   NEAR-EXPIRY DEALS
========================================== */

function renderDeals() {
  const row = document.getElementById('dealsRow');

  if (!row) {
    return;
  }

  row.innerHTML = '';

  dealProducts.forEach(function (deal) {
    row.appendChild(buildDealCard(deal));
  });
}

function buildDealCard(deal) {
  const card = document.createElement('div');
  card.className = 'deal-card';

  const img = document.createElement('img');
  img.src = deal.image;
  img.alt = deal.name;

  const badge = document.createElement('span');
  badge.className = 'deal-badge';
  badge.textContent =
    deal.daysPastExpiry + ' days past best-before';

  const body = document.createElement('div');
  body.className = 'deal-body';

  const tag = document.createElement('span');
  tag.className = 'tag';
  tag.textContent = deal.category;

  const title = document.createElement('h3');
  title.textContent = deal.name;

  const priceRow = document.createElement('div');
  priceRow.className = 'deal-price-row';

  const oldPrice = document.createElement('span');
  oldPrice.className = 'original-price';
  oldPrice.textContent = 'R' + deal.originalPrice;

  const newPrice = document.createElement('span');
  newPrice.className = 'deal-price';
  newPrice.textContent = 'R' + deal.dealPrice;

  priceRow.append(oldPrice, newPrice);
  body.append(tag, title, priceRow);
  card.append(img, badge, body);

  return card;
}


/* ==========================================
   PRODUCT CARDS
========================================== */

function renderProducts() {
  const grid = document.getElementById('productGrid');

  if (!grid) {
    return;
  }

  grid.innerHTML = '';

  const list =
    activeFilter === 'All'
      ? products
      : products.filter(function (product) {
          return product.category === activeFilter;
        });

  list.forEach(function (product) {
    grid.appendChild(buildProductCard(product));
  });
}

function buildProductCard(product) {
  let currentImage = 0;

  const card = document.createElement('div');
  card.className = 'product-card';

  const slider = document.createElement('div');
  slider.className = 'slider';

  const img = document.createElement('img');
  img.src = product.images[0];
  img.alt = product.name;

  const prevBtn = document.createElement('button');
  prevBtn.className = 'slider-btn prev';
  prevBtn.textContent = '‹';

  const nextBtn = document.createElement('button');
  nextBtn.className = 'slider-btn next';
  nextBtn.textContent = '›';

  const dots = document.createElement('div');
  dots.className = 'dots';

  const dotEls = product.images.map(function (_, index) {
    const dot = document.createElement('span');

    dot.className =
      'dot' + (index === 0 ? ' active' : '');

    dots.appendChild(dot);

    return dot;
  });

  function updateSlider() {
    img.src = product.images[currentImage];

    dotEls.forEach(function (dot, index) {
      dot.classList.toggle(
        'active',
        index === currentImage
      );
    });
  }

  prevBtn.onclick = function () {
    currentImage =
      (currentImage - 1 + product.images.length) %
      product.images.length;

    updateSlider();
  };

  nextBtn.onclick = function () {
    currentImage =
      (currentImage + 1) %
      product.images.length;

    updateSlider();
  };

  slider.append(
    img,
    prevBtn,
    nextBtn,
    dots
  );

  const body = document.createElement('div');
  body.className = 'card-body';

  const tag = document.createElement('span');
  tag.className = 'tag';
  tag.textContent = product.category;

  const title = document.createElement('h3');
  title.textContent = product.name;

  const desc = document.createElement('p');
  desc.className = 'desc';
  desc.textContent = product.desc;

  const detailsList = document.createElement('ul');
  detailsList.className = 'details-list';

  product.details.forEach(function (detail) {
    const li = document.createElement('li');
    li.textContent = detail;
    detailsList.appendChild(li);
  });

  const priceRow = document.createElement('div');
  priceRow.className = 'price-row';

  const price = document.createElement('span');
  price.className = 'price';
  price.textContent = 'R' + product.price;

  const addBtn = document.createElement('button');
  addBtn.className = 'add-btn';
  addBtn.textContent = 'Add to basket';

  addBtn.onclick = function () {
    const isAdded =
      addBtn.classList.toggle('added');

    addBtn.textContent =
      isAdded
        ? 'Added ✓'
        : 'Add to basket';
  };

  priceRow.append(price, addBtn);

  body.append(
    tag,
    title,
    desc,
    detailsList,
    priceRow
  );

  card.append(slider, body);

  return card;
}


/* ==========================================
   INITIAL PRODUCT PAGE SETUP
========================================== */

const requestedCategory =
  new URLSearchParams(window.location.search)
    .get('category');

if (
  requestedCategory &&
  categories.includes(requestedCategory)
) {
  activeFilter = requestedCategory;
}

renderFilters();
renderProducts();
renderDeals();