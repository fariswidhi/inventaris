<template>
  <div>
    
  <h1>Tambah User</h1>
  <form v-on:submit.prevent="save()" class="form-horizontal" >

                      <div class="form-group">
                        <label for="name" class="col-md-12 control-label" >Nama</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" required="" placeholder="Nama" v-model="user.name"/>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="name" class="col-md-12 control-label" >Email</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" required="" placeholder="Email" v-model="user.email"/>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="name" class="col-md-12 control-label" >Password</label>
                        <div class="col-md-12">
                          <input type="password" class="form-control" required="" placeholder="Password" v-model="user.password"/>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="name" class="col-md-12 control-label" >Level</label>
                        <div class="col-md-12">
                          <select class="form-control" v-model="user.level">
                              <option value="1">Admin</option>
                              <option value="2">Petugas</option>
                          </select>

                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-4 col-md-offset-2">
                          <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                      </div>
                    </form>

  </div>
</template>

<script>
  export default{
    data(){
      return {
        user:{}
      }
    },
    methods:{
      save(){
        let uri = 'http://localhost:8000/users';
        var user = this.user;
        this.axios.post(uri,user).then((response)=>{
          this.$router.push({'name':'User'});
        })
      }
    }
  }  
</script>