<template>
	<div>
  <h3>Detail Transkasi Barang Masuk</h3>		
    <div class="row">
      <div class="col-lg-4">
          <table class="table table-bordered">
            <tr>
              <td></td>
            </tr>
          </table>
      </div>
    </div>

	</div>
</template>

<script>
  export default{
    data(){
      return{
        data:''
      }
    },
    created(){
      this.fetch();
    },
    methods:{
      fetch(){
        let uri = 'http://localhost:8000/transaksi/barang-masuk/all';
        axios.get(uri).then((response)=>{
          this.data = response.data;
        });
      }
    }
  }
</script>