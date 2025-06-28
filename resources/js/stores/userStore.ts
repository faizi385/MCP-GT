

import { defineStore } from 'pinia';

export const useUserStore = defineStore('user', {
  state: () => ({
    name: 'Guest',
    isLoggedIn: false,
  }),
  actions: {
    login(name: string) {
      this.name = name;
      this.isLoggedIn = true;
    },
    logout() {
      this.name = 'Guest';
      this.isLoggedIn = false;
    },
  },
});
