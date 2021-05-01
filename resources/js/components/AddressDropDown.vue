<template>
     <div class="form-inline form-group mt-1">
        <div class="col-md-4">
            <select class="form-control" name="province_id" v-model="province" @change="getDistricts()">
                <option value=""> Chọn tỉnh/thành</option>
                <option v-for="data in provinces" :value="data.id" :key="data.id">
                    {{ data.name }}
                </option>               
            </select>
        </div>
        <div class="col-md-4">
            <select class="form-control" name="district_id" v-model="district" @change="getWards()">
                <option value="">Chọn quận/huyện</option>
                <option v-for="data in districts" :value="data.id" :key="data.id">
                    {{ data.name }}
                </option>                
            </select>
        </div>
        <div class="col-md-4">
            <select class="form-control" name="ward_id">
                <option value="">Chọn phường/xã </option>
                <option v-for="data in wards" :value="data.id" :key="data.id">
                    {{ data.name }}
                </option>                
            </select>
        </div>
     </div>
    
</template>

<script>
export default {
    data() {
        return{
            province:0,
            provinces:[],
            district:0,
            districts:[],
            ward:0,
            wards:[]
        }       
    },

    mounted(){
        this.getProvinces();
    },

    methods:{
        getProvinces(){
            axios.get('/api/province').then((response)=>{
                this.provinces = response.data;
            })
        },
        getDistricts(){
            axios.get('/api/district', {params:{province_id:this.province}}).then((response)=>{
                this.districts = response.data;
            })
        },
        getWards(){
            axios.get('/api/ward', {params:{district_id:this.district}}).then((response)=>{
                this.wards = response.data;
            })
        }
    }
}
</script>