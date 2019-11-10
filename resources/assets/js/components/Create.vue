
<template>
  <div>
    <div class="row">
      <div class="col-md-12">
        <br>
        <br>
        <h4>Create new data</h4>
        <br>
        <!-- prevent form submit for reload page, then call function addData() -->
        <form @submit.prevent="addData()">

          <div class="form-group">
            <label>Brand</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Input brand"
              v-model="form.brand"
              required
            >
          </div>
          <div class="form-group">
            <label>Model</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Input model"
              v-model="form.model"
              required
            >
          </div>
          <div class="form-group">
            <label>Fuel</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Input fuel"
              v-model="form.fuel"
              required
            >
          </div>
          <div class="form-group">
            <label>Price</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Input price"
              v-model="form.price"
              required
            >
          </div>
          <button class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import vue2Dropzone from 'vue2-dropzone'
import 'vue2-dropzone/dist/vue2Dropzone.min.css'

var imagePath = '';

export default {
  data() {
    return {
      form: {
        brand: '',
        model: '',
        fuel: '',
        price: ''
      }
    }
  },
  methods: {
    addData() {
      // post data
      axios
        .post("http://127.0.0.1:3030/api/product", {
          image: this.form.image,
          brand: this.form.brand,
          model: this.form.model,
          fuel: this.form.fuel,
          price: this.form.price
        })
        .then(response => {         
          this.$router.push("/");
        });
    }
  }
};
</script>