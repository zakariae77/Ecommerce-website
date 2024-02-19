import { createStore } from 'vuex';

export default createStore({
  state: {
    basketCount: "",
  },
  mutations: {
    setBasketCount(state, count) {
      state.basketCount = count;
    },
  },
});
