<template>
  <div class="flex flex-col items-start lg:grid lg:grid-cols-12 gap-8 lg:gap-16 pt-6 md:pt-8 pb-32">
    <div class="col-span-8">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
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
              <div class="item" v-for="attraction in selectedAttractions">
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
        <a href="" class="btn btn-primary w-full">Buy now</a>
      </div>
    </div>
  </div>
</template>

<script setup>
import {computed, ref} from "vue";

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