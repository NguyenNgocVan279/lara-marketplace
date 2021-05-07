<template>
    <div>
        <p v-if="showViewConversationOnSuccess">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">
                Gửi tin nhắn
            </button>
        </p>
        <p v-else>
            <!-- Button trigger modal -->
            <a href="/messages">
                <button type="button" class="btn btn-success">
                    Xem hộp chat
                </button>
            </a>            
        </p>
        
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    Gửi tin nhắn đến {{ sellerName }}
                    {{ userId }}{{ receiverId }}{{ adId }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <textarea v-model="body" class="form-control" placeholder="Vui lòng soạn tin nhắn tại đây..."></textarea>
                <p v-if="successMessage" style="color:green;">Tin nhắn đã được gửi đi</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-danger" @click.prevent="sendMessage()">Gửi đi</button>
            </div>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
export default {
    
    props: ['sellerName','userId','receiverId','adId'],

    data(){
        return{
            body:"",
            successMessage:false,
            showViewConversationOnSuccess:true
        }
    },
    methods:{
        sendMessage()
        {
            if(this.body==''){
                alert('Vui lòng viết tin nhắn')
            }
            
            axios.post('/send/message',{
                body:this.body,
                receiverId:this.receiverId,
                userId:this.userId,
                adId:this.adId
            }).then((response)=>{
                this.body=''
                this.successMessage=true,
                this.showViewConversationOnSuccess=false
            })
        }
    }
    
    
}
</script>