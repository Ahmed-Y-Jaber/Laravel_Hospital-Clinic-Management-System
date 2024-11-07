<div>

    @if($selected_conversation)

    <form wire:submit.prevent="sendMessage">


        <div class="main-chat-footer">

            <input class="form-control" wire:model="body" placeholder="اكتب رسالتك هنا ..." type="text">
            <button type="submit" class="main-msg-send" > <i class="far fa-paper-plane"></i> </button>
        </div>
    </form>
    @endif
</div>
