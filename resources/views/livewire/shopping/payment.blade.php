<div class="flex justify-center">
  <div class="shadow-md p-5 mt-5">
    <table class="border-collapse">
      <thead>
        <tr class="text-sm">
          <th class="border-2 border-white bg-pink-100 w-10 font-light">項次</th>
          <th class="border-2 border-white bg-pink-100 w-96 font-light">品項</th>
          <th class="border-2 border-white bg-pink-100 w-20 font-light">價格</th>
          <th class="border-2 border-white bg-pink-100"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($cart as $key => $item)
            <tr>
            <td class="p-2 text-center">
                <div class="bg-gray-100 w-6 text-sm">{{ $key + 1 }}</div>
            </td>
            <td class="p-2">{{ $item['name'] }}</td>
            <td class="p-2">${{ $item['price'] }}</td>
            <td class="p-2">
                <button class="text-sm text-gray-400" wire:click="deleteItem({{ $key }})">取消</button>
            </td>
            </tr>
        @endforeach
      </tbody>
    </table>
    <!--  -->
    <div class="mt-10">
      <p class="text-sm mb-2">配送方式：</p>
      <input type="radio" name="sent" id="sent-1" />
      <label for="sent-1" class="text-sm mr-2">宅配</label>
      <input type="radio" name="sent" id="sent-2" />
      <label for="sent-2" class="text-sm mr-2">7-11超商取貨</label>
      <input type="radio" name="sent" id="sent-3" />
      <label for="sent-3" class="text-sm">全家超商取貨</label>
    </div>
    <!--  -->
    <div class="text-right mt-5">
      <p>總計： <span class="text-red-600 text-xl font-bold">${{ $cart_sum }}</span></p>
    </div>
    <!--  -->
    <div class="mt-5">
      <p class="text-sm mb-2">付款方式：</p>
      <button class="w-24 py-1 rounded bg-red-600 text-white text-sm">信用卡</button>
      <button class="w-24 py-1 rounded bg-red-600 text-white text-sm">ATM轉帳</button>
      <button class="w-24 py-1 rounded bg-red-600 text-white text-sm">貨到付款</button>
    </div>
  </div>
</div>
