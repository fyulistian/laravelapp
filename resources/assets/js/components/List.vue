
<template>
  <div>
    <div class="row">
      <div class="col-md-12">
        <br>
        <br>
        <div class="row">
          <div class="col-md-10">
            <h4>Products</h4>
          </div>
          <div class="col-md-2">
            <!-- push router to form create data -->
            <router-link class="btn btn-primary w-100" to="/product">+ Tambah</router-link>
          </div>
        </div>
        <br>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Brand</th>
              <th scope="col">Model</th>
              <th scope="col">Fuel</th>
              <th scope="col">Price</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- view data to table -->
            <tr v-for="product in product" :key="product.id">
              <td style="width:25%">{{product.brand}}</td>
              <td style="width:25%">{{product.model}}</td>
              <td style="width:10%">{{product.fuel}}</td>
              <td style="width:10%">{{product.price}}</td>
              <td style="width:20%">
                <router-link class="btn btn-warning" :to="'/product/'+product.id">Update</router-link>
                <button class="btn btn-danger" v-on:click="deleteData(product.id)">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<!-- script js -->
<script>
export default {
  data() {
    return {
      // variable array based on data fetch from api
      product: []
    };
  },
  created() {
    this.loadData();
  },
  methods: {
    loadData() {
      // fetch data dari api using axios
      axios.get("http://127.0.0.1:3030/api/product").then(response => {
        this.product = response.data;
      });
    },
    deleteData(id) {
      // delete data
      axios.delete("http://127.0.0.1:3030/api/product/" + id).then(response => {
        this.loadData();
      });
    }
  }
};
</script>