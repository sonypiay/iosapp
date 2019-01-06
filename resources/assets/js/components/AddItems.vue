<template>
  <div>
    <navbaritem></navbaritem>
    <div class="uk-container">
      <h3 class="uk-text-left uk-margin-large-top content-heading">Tambah Barang</h3>
      <div v-if="successMessage" class="uk-alert-success" uk-alert>{{ successMessage }}</div>
      <div v-if="errorMessage" class="uk-alert-danger" uk-alert>{{ errorMessage }}</div>
      <form class="uk-form-stacked" @submit.prevent="addItems">
        <div class="uk-margin">
          <label class="uk-form-label">Nama Barang</label>
          <div class="uk-form-controls">
            <input type="text" class="uk-input input-form" v-model="forms.namabarang">
          </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label">Merk Barang</label>
          <div class="uk-form-controls">
            <input type="text" class="uk-input input-form" v-model="forms.merkbarang">
          </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label">Harga Barang</label>
          <div class="uk-form-controls">
            <input type="text" class="uk-input input-form" v-model="forms.hargabarang">
          </div>
        </div>
        <div class="uk-margin">
          <button class="uk-width-1-1 uk-button uk-button-default button-form">Tambah</button>
        </div>
      </form>
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
      forms: {
        namabarang: '',
        merkbarang: '',
        hargabarang: '',
        error: false
      },
      successMessage: '',
      errorMessage: ''
    }
  },
  methods: {
    addItems()
    {
      if( this.forms.namabarang === '' )
      {
        this.forms.error = true;
      }
      if( this.forms.merkbarang === '' )
      {
        this.forms.error = true;
      }
      if( this.forms.hargabarang === '' )
      {
        this.forms.error = true;
      }

      if( this.forms.error === true )
      {
        this.forms.error = false;
        return false;
      }

      axios({
        method: 'post',
        url: this.$root.url + '/api/add/items',
        headers: {
          'Content-Type': 'application/json'
        },
        params: {
          nama_barang: this.forms.namabarang,
          merk_barang: this.forms.merkbarang,
          harga_barang: this.forms.hargabarang
        }
      }).then( res => {
        this.forms = {
          namabarang: '',
          merkbarang: '',
          hargabarang: '',
          error: false
        };
        this.successMessage = res.data.statusText;
      }).catch( err => {
        this.errorMessage = err.response.statusText;
      });
    }
  }
}
</script>
