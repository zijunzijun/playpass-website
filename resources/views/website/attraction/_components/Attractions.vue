<template>
  <div class="flex flex-col items-start lg:grid lg:grid-cols-12 gap-8 lg:gap-16 pt-6 md:pt-8 lg:pb-32">
    <div class="col-span-8">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4 pb-8">
        <div class="card-attraction cursor-pointer"
             :class="{ 'selected': isSelected(attraction) }"
             v-for="attraction in attractions"
             :key="attraction.id"
             @click="toggleAttraction(attraction)">
          <div class="details">
            <div class="inner">
              <div class="name">{{ attraction.name }}</div>
              <div class="text-xs text-lina-50">{{ attraction.description }}</div>
            </div>
          </div>
          <div class="image">
            <figure>
              <img :src="attraction.image" alt="">
            </figure>
          </div>
        </div>
      </div>
    </div>
    <div class="col-span-4 w-full sticky bottom-0 lg:bottom-auto lg:top-4">
      <div class="attraction-summary ">
        <div class="lg:hidden relative py-2.5" @click="hideSummary = !hideSummary">
          <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 py-1 px-2.5 bg-white rounded-t-1/2">
            <svg :class="hideSummary ? 'rotate-180' : ''"
                 class="w-6 h-6 text-gray-700" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="m6 15 6-6 6 6" stroke="currentColor" stroke-width="2"/>
            </svg>
          </div>
          <div class="relative caption text-center font-semibold" v-if="!hideSummary">
            {{ selectedAttractions.length <= 0 ? 'Please select at least one attraction to start' : 'Click to view your savings'}}
          </div>
        </div>
        <div :class="{ 'hidden': !hideSummary }" class="lg:block">
          <div class="top">
            <h3 class="mb-4">Your Attrations</h3>
            <div class="summary-list" v-if="selectedAttractions.length > 0">
              <div class="item" v-for="attraction in selectedAttractions" :key="attraction.id">
                <div class="image">
                  <figure>
                    <img :src="attraction.image"
                         :alt="attraction.name">
                  </figure>
                </div>
                <div class="description">
                  <div class="name">{{ attraction.name }}</div>
                  <div class="price">
                    Normally <span class="text-lina-600">RM 45</span>
                  </div>
                </div>
              </div>
            </div>
            <div v-else class="text-center caption bg-gray-200 p-2 rounded-md">
              Please select at least one attraction to start
            </div>
          </div>
          <div class="bottom">
            <div class="space-y-1 caption">
              <div class="flex items-center justify-between space-x-4">
                <div>
                  Total gate price cost
                </div>
                <div class="flex-shrink-0">
                  RM {{ totalCost === 0 ? '-' : totalCost }}
                </div>
              </div>
              <div class="flex items-center justify-between space-x-4 text-lina-600">
                <div>
                  Price of buying a
                  <br>
                  1-day Penang Play Pass
                </div>
                <div class="flex-shrink-0">RM 149</div>
              </div>
            </div>
            <div class="flex items-center justify-between space-x-4 body-2 mt-3">
              <div>
                How much you save with
                <br>
                Penang PlayPass
              </div>
              <div class="flex-shrink-0 text-lina-600">
                RM {{ totalSaving < 0 ? '-' : totalSaving }}
              </div>
            </div>
          </div>
          <div class="body-2 text-center py-3">
            Don't miss out on Penang PlayPass!
          </div>
        </div>
        <a :href="checkoutPricingRoute" class="btn btn-primary w-full">Buy now</a>
      </div>
    </div>
  </div>
</template>

<script setup>
import {computed, ref} from "vue";

const props = defineProps({
  checkoutPricingRoute: String,
})

let attractions = ref([
  {
    id: 1,
    name: 'The Habitat Penang Hill',
    price: 47,
    description: 'Included with pass - Normally RM 47',
    image: '/images/attractions/the-habitat-penang-hill.jpg'
  },
  {
    id: 2,
    name: 'Entopia - Voices of Nature',
    price: 75,
    description: 'Included with pass - Normally RM 75',
    image: '/images/attractions/entopia.png'
  },
  {
    id: 3,
    name: 'Penang Hop-On Hop-Off',
    price: 45,
    description: 'Hop-on Hop-off on weekend, Panoramic Tour on weekdays Normally RM 45/25',
    image: '/images/attractions/penang-hop-on-hop-off.jpg'
  },
  {
    id: 4,
    name: 'The Top Penang Skywalk',
    price: 61,
    description: 'Included with pass - Normally RM 61',
    image: '/images/attractions/the-top-penang-skywalk.jpg'
  },
  {
    id: 5,
    name: 'Penang Hill Train (Fast Lane)',
    price: 80,
    description: 'Included with pass - Normally RM 80',
    image: '/images/attractions/penang-hill-train.jpg'
  },
  {
    id: 6,
    name: 'Art & Garden',
    price: 30,
    description: 'Included with pass - Normally RM 30',
    image: '/images/attractions/art-and-garden.jpg'
  },
  {
    id: 7,
    name: 'Asia Camera Museum',
    price: 25,
    description: 'Included with pass - Normally RM 25',
    image: '/images/attractions/asia-camera-museum-penang.jpg'
  },
  {
    id: 8,
    name: 'Audi Dream Farm',
    price: 70,
    description: 'Included with pass - Normally RM 70',
    image: '/images/attractions/audi-dream-farm-penang.jpg'
  },
  {
    id: 9,
    name: 'Cheong Fatt Tze Mansion',
    price: 25,
    description: 'Included with pass - Normally RM 25',
    image: '/images/attractions/cheong-fatt-tze-museum.jpg'
  },
  {
    id: 10,
    name: 'Dark Mansion Museum',
    price: 40,
    description: 'Included with pass - Normally RM 40',
    image: '/images/attractions/dark-mansion-3d-glow-in-the-dark-museum.jpg'
  },
  {
    id: 11,
    name: 'Penang Bird Park',
    price: 45,
    description: 'Included with pass - Normally RM 45',
    image: '/images/attractions/penang-bird-park.jpg'
  },
  {
    id: 12,
    name: 'Glass Museum Penang',
    price: 20,
    description: 'Included with pass - Normally RM 20',
    image: '/images/attractions/penang-glass-museum.jpg'
  },
  {
    id: 13,
    name: 'PG Gold Museum',
    price: 20,
    description: 'Included with pass - Normally RM 20',
    image: '/images/attractions/penang-gold-musem.jpg'
  },
  {
    id: 14,
    name: 'Penang House of Music',
    price: 30,
    description: 'Included with pass - Normally RM 30',
    image: '/images/attractions/penang-house-of-music.jpg'
  },
  {
    id: 15,
    name: 'Penang War Museum',
    price: 30,
    description: 'Included with pass - Normally RM 30',
    image: '/images/attractions/penang-war-museum.jpg'
  },
  {
    id: 16,
    name: 'Tech Dome Penang',
    price: 28,
    description: 'Included with pass - Normally RM 28',
    image: '/images/attractions/tech-dome-penang.jpg'
  },
  {
    id: 17,
    name: 'TeddyVille Museum',
    price: 36,
    description: 'Included with pass - Normally RM 36',
    image: '/images/attractions/teddyville-museum-penang.jpg'
  },
  {
    id: 18,
    name: 'Tropical Fruit Farm',
    price: 58,
    description: 'Included with pass - Normally RM 58',
    image: '/images/attractions/tropical-fruit-farm.jpg'
  },
  {
    id: 19,
    name: 'Tropical Spice Garden',
    price: 28,
    description: 'Included with pass - Normally RM 28',
    image: '/images/attractions/tropical-spice-farm.jpg'
  },
  {
    id: 20,
    name: 'Wonder Food Museum',
    price: 25,
    description: 'Included with pass - Normally RM 25',
    image: '/images/attractions/wonder-food-museum.jpg'
  }
])

let hideSummary = ref(false);

let selectedAttractions = ref([])

function toggleAttraction(attraction) {
  const index = selectedAttractions.value.findIndex(a => a.id === attraction.id);

  if (index === -1) {
    selectedAttractions.value.push(attraction);
  } else {
    selectedAttractions.value.splice(index, 1);
  }
}

const isSelected = computed(() => {
  return (attraction) => {
    return selectedAttractions.value.findIndex(a => a.id === attraction.id) !== -1;
  };
});

let totalCost = computed(() => {
  return selectedAttractions.value.reduce((sum, attraction) => sum + attraction.price, 0);
});

let passPrice = ref(100);

let totalSaving = computed(() => {
  return totalCost.value - passPrice.value;
});
</script>

<script>
export default {
  name: "Attractions"
}
</script>

<style scoped>

</style>