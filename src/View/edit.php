
<h2>Cập nhật thông tin khách hàng</h2>
<form method="post" action="./index.php?page=edit">
    <input type="hidden" name="id" value="<?php if (isset($product)) {
        echo $product->id;
    } ?>"/>
    <div class="form-group">
        <label>Mã sản phẩm</label>
        <input type="text" name="name" value="<?php echo $product->name; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Tên sản phẩm</label>
        <input type="text" name="category" value="<?php echo $product->category; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Loại sản phẩm</label>
        <input type="text" name="price" value="<?php echo $product->price; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Nhà cung cấp </label>
        <input type="text" name="quantity" value="<?php echo $product->quantity; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Mô tả sản phẩm</label>
        <textarea name="detail" class="form-control"><?php echo $product->detail; ?></textarea>
    </div>
    <div class="form-group">
        <label>Số lượng trong kho</label>
        <textarea name="detail" class="form-control"><?php echo $product->detail; ?></textarea>
    </div>
    <div class="form-group">
        <label>Giá sản phẩm</label>
        <textarea name="detail" class="form-control"><?php echo $product->detail; ?></textarea>
    </div>

    <div class="form-group">
        <button type="submit" name="Update" class="btn btn-primary">Cập nhập</button>
        <a href="index.php" class="btn btn-secondary">Hủy</a>
    </div>
</form>