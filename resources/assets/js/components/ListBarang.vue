<template>
  <div>
    <navbaritem></navbaritem>
    <div class="uk-container">
      <h3 class="uk-text-center uk-margin-large-top content-heading">Data Barang</h3>
      <div class="uk-margin-top">
        <div class="uk-grid-small" uk-grid>
          <div class="uk-width-1-1" v-for="items in listitems">
            <div class="uk-card uk-card-body uk-card-default uk-card-small card-listitems">
              <div class="card-listitem-title">{{ items.nama_barang }}</div>
              <div class="card-listitem-value">Rp. {{ items.harga }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import navbaritem from './Navbar.vue';
export default {
  components: {
    navbaritem
  },
  data() {
    return {
      listitems: []
    }
  },
  methods: {
    listItems() {
      axios({
        method: 'get',
        url: this.$root.url + '/api/listitems'
      }).then( res => {
        let result = res.data;
        this.listitems = result.results;
        console.log( this.listitems );
      }).catch( err => {
        console.log( err.response.statusText );
      });
    }
  },
  mounted() {
    this.listItems();
  }
}
</script>
