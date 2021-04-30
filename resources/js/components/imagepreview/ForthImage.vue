<template>
    <div>
        <input type="file" name="forth_image" @change="onFileChange" class="custom-file-upload" required="" accept="image/*">
        <div>
            <img v-if="url" :src="url" width="100" height="60" alt="">
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return{
            url:''
        }
    },
    methods:{
        onFileChange(e){
            const file = e.target.files[0];
            this.url = URL.createObjectURL(file);
        }
    }
}
</script>