<template>
  <div class="bg-lina-500 bg-olu-200 bg-olu-300 bg-cookie-400"></div>
  <div class="flex flex-col items-start lg:grid lg:grid-cols-12 gap-8 lg:gap-16 pt-6 md:pt-8 lg:pb-32">
    <div class="col-span-8 space-y-10">
      <div class="pb-8">
        <div class="flex space-x-3">
          <div class="flex-shrink-0">
            <div
              class="w-9 h-9 rounded-full border-2 border-gray-700 text-gray-700 font-bold bg-cookie-500 inline-flex items-center justify-center">
              <span>1</span>
            </div>
          </div>
          <div class="flex-1">
            <h3 class="py-1.5">Select number of days</h3>
            <div class="body-2">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer augue magna, facilisis vitae semper eget,
              pulvinar eu mauris.
            </div>
          </div>
        </div>
        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-x-4 gap-y-4">
          <div class="card-pricing" v-for="product in products" :key="product.id"
               :class="[ isSelectedProduct(product) ? 'selected' : '', isSelectedProduct(product) ? 'bg-' + product.color : '' ]"
               @click="addToSelectedProduct(product)">
            <div :class="'bg-' + product.color"></div>
            <div class="header">
              <figure>
                <span :class="'bg-' + product.color"></span>
                <img src="/icons/cards/card-outline.svg" alt="">
              </figure>
              <div class="title">
                {{ product.name }}
                <span v-if="product.isMykadHolder">(MyKad Holder)</span>
              </div>
            </div>
            <div class="details">
              <div class="item" v-for="item in product.variant" :key="item.id">
                <div class="inner">
                  <div class="variant">{{ item.name }}</div>
                  <div class="dotted">
                  </div>
                  <div class="price">RM {{ item.price }}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div>
        <div class="flex space-x-3">
          <div class="flex-shrink-0">
            <div
              class="w-9 h-9 rounded-full border-2 border-gray-700 text-gray-700 font-bold bg-cookie-500 inline-flex items-center justify-center">
              <span>2</span>
            </div>
          </div>
          <div class="flex-1">
            <h3 class="py-1.5">Select number of people</h3>
          </div>
        </div>
        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-x-4 gap-y-4">
          <div class="card-quantity" v-for="variant in selectedProduct.variant" :key="variant.id">
            <div class="name">
              {{ variant.name }}
              <span v-if="variant.description">{{ variant.description }}</span>
            </div>
            <div class="quantity-toggle">
              <button @click="decrement(variant)">-</button>
              <input type="text" :value="getQuantity(variant)" readonly>
              <button @click="increment(variant)">+</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-span-4 w-full sticky bottom-0 lg:bottom-auto lg:top-4">
      <div class="cart-summary">
        <div class="lg:hidden relative py-2.5" @click="hideSummary = !hideSummary">
          <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 py-1 px-2.5 bg-white rounded-t-1/2">
            <svg :class="hideSummary ? 'rotate-180' : ''"
                 class="w-6 h-6 text-gray-700" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="m6 15 6-6 6 6" stroke="currentColor" stroke-width="2"/>
            </svg>
          </div>
          <div class="relative caption text-center font-semibold" v-if="!hideSummary">
            {{ cart.length <= 0 ? 'Please add at least one pass to cart' : 'Click to view your cart'}}
          </div>
        </div>
        <div :class="{ 'hidden': !hideSummary }" class="lg:block mb-4">
          <div class="top">
            <h3 class="mb-4">Your Pass</h3>
            <div class="summary-list" v-if="cart.length > 0">
              <div class="item" v-for="item in cart" :key="item.id">
                <div class="image">
                  <figure>
                    <img :src="item.product.image" alt="">
                  </figure>
                </div>
                <div class="description">
                  <div class="name">
                    {{ item.product.name }}
                    <span v-if="item.product.isMykadHolder">(MyKad Holder)</span>
                  </div>
                </div>
                <div class="variant" v-for="variant in item.product.variant.sort((a, b) => a.id - b.id)" :key="variant.id">
                  <div>
                    {{ variant.name }} x {{ variant.quantity }}
                  </div>
                  <div class="price">
                    RM {{ variant.price }}
                  </div>
                </div>
              </div>
            </div>
            <div v-else class="text-center caption bg-gray-200 p-2 rounded-md">
              Please add at least one pass to cart
            </div>
          </div>
          <div class="bottom">
            <div class="flex items-center justify-between space-x-4 body-2 !font-semibold">
              <div>
                Total
              </div>
              <div class="flex-shrink-0 text-lina-600">
                RM {{ getTotalPrice === 0 ? '-' : getTotalPrice }}
              </div>
            </div>
          </div>
        </div>
        <a href="/" class="btn btn-primary w-full">Buy now</a>
      </div>
    </div>
  </div>
</template>

<script setup>
import {computed, ref} from "vue";

let hideSummary = ref(false);

let products = [
  {
    id: 1,
    name: '1 Day Pass',
    isMykadHolder: false,
    variant: [
      {id: 1, name: 'Adult', price: 149, description: ''},
      {id: 2, name: 'Child', price: 89, description: '(4-12 years old)'},
    ],
    image: '/images/cards/card-1-day.png',
    color: 'lina-600'
  },
  {
    id: 2,
    name: '2 Day Pass',
    isMykadHolder: false,
    variant: [
      {id: 1, name: 'Adult', price: 290, description: ''},
      {id: 2, name: 'Child', price: 175, description: '(4-12 years old)'},
    ],
    image: '/images/cards/card-2-day.png',
    color: 'olu-300'
  },
  {
    id: 3,
    name: '3 Day Pass',
    isMykadHolder: false,
    variant: [
      {id: 1, name: 'Adult', price: 419, description: ''},
      {id: 2, name: 'Child', price: 259, description: '(4-12 years old)'},
    ],
    image: '/images/cards/card-3-day.png',
    color: 'cookie-500'
  },
  {
    id: 4,
    name: '1 Day Pass',
    isMykadHolder: true,
    variant: [
      {id: 1, name: 'Adult', price: 119, description: ''},
      {id: 2, name: 'Child', price: 69, description: '(4-12 years old)'},
    ],
    image: '/images/cards/card-1-day.png',
    color: 'lina-500'
  },
  {
    id: 5,
    name: '2 Day Pass',
    isMykadHolder: true,
    variant: [
      {id: 1, name: 'Adult', price: 219, description: ''},
      {id: 2, name: 'Child', price: 135, description: '(4-12 years old)'},
    ],
    image: '/images/cards/card-2-day.png',
    color: 'olu-200'
  },
  {
    id: 6,
    name: '3 Day Pass',
    isMykadHolder: true,
    variant: [
      {id: 1, name: 'Adult', price: 329, description: ''},
      {id: 2, name: 'Child', price: 199, description: '(4-12 years old)'},
    ],
    image: '/images/cards/card-3-day.png',
    color: 'cookie-400'
  },
]

let selectedProduct = ref(products[0]);
let cart = ref([]);

let addToSelectedProduct = (product) => {
  selectedProduct.value = product;
};

const isSelectedProduct = computed(() => {
  return (product) => {
    // Check if the ID of the selected product matches the ID of the given product.
    return selectedProduct.value.id === product.id;
  }
});

const getQuantity = (variant) => {
  // Find the cart item in the cart based on the selected product's ID and variant name.
  const cartItem = cart.value.find(
    (item) =>
      item.product.id === selectedProduct.value.id &&
      item.product.variant.some((v) => v.id === variant.id)
  );

  // If the cart item exists.
  if (cartItem) {
    // Find the variant item within the cart item's variants array.
    const variantItem = cartItem.product.variant.find((v) => v.id === variant.id);
    // Return the quantity of the variant item if it exists, otherwise return 0.
    return variantItem ? variantItem.quantity : 0;
  }

  // If the cart item doesn't exist, return 0.
  return 0;
};


const increment = (variant) => {
  // Find the index of the cart item in the cart based on the selected product's ID.
  const cartItem = cart.value.find(
    (item) => item.product.id === selectedProduct.value.id
  );

  // Check if the cart item exists (index > -1).
  if (cartItem) {
    // Find the existing variant within the cart item's variants array.
    const existingVariant = cartItem.product.variant.find(
      (v) => v.id === variant.id
    );

    // If the variant exists, increment its quantity.
    if (existingVariant) {
      existingVariant.quantity++;
    } else {
      // If the variant doesn't exist, add it to the variants array with quantity 1.
      cartItem.product.variant.push({...variant, quantity: 1});
    }
  } else {
    // If the cart item doesn't exist, create a new cart item with the selected product and variant.
    const productCopy = {...selectedProduct.value};
    productCopy.variant = [{...variant, quantity: 1}];
    cart.value.push({product: productCopy});
  }
};


const decrement = (variant) => {
  // Find the index of the cart item in the cart based on the selected product's ID.
  const cartItemIndex = cart.value.findIndex(
    (item) => item.product.id === selectedProduct.value.id
  );

  // Check if the cart item exists (index > -1).
  if (cartItemIndex === -1) {
    return; // Cart item not found, nothing to decrement
  }

  const cartItem = cart.value[cartItemIndex];
  // Check if the cart item has any variants.
  // Find the index of the variant within the cart item's variants array.
  const variantIndex = cartItem.product.variant.findIndex(
    (v) => v.id === variant.id
  );

  if (variantIndex === -1) {
    return; // Variant not found, nothing to decrement
  }

  // If the variant exists, decrement its quantity.
  const variantItem = cartItem.product.variant[variantIndex];
  variantItem.quantity--;

  // If the variant's quantity reaches 0, remove it from the variants array.
  if (variantItem.quantity === 0) {
    cartItem.product.variant.splice(variantIndex, 1);
  }

  // If the cart item has no variants, remove it from the cart.
  if (cartItem.product.variant.length === 0) {
    cart.value.splice(cartItemIndex, 1);
  }
};

let getTotalPrice = computed(() => {
  return cart.value.reduce((total, cartItem) => {
    return (
      total +
      cartItem.product.variant.reduce((subtotal, variant) => {
        return subtotal + variant.quantity * variant.price;
      }, 0)
    );
  }, 0);
});
</script>

<script>
export default {
  name: "Checkout"
}
</script>

<style scoped>

</style>