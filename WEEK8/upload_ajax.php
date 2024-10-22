<?php
if (isset($_FILES['files'])) {
  $errors = array();
  $extensions = array("jpeg", "jpg", "png", "gif");
  $total_files = count($_FILES['files']['name']);

  for ($i = 0; $i < $total_files; $i++) {
    $file_name = $_FILES['files']['name'][$i];
    $file_size = $_FILES['files']['size'][$i];
    $file_tmp = $_FILES['files']['tmp_name'][$i];
    $file_ext = strtolower(end(explode('.', $_FILES['files']['name'][$i])));

    if (in_array($file_ext, $extensions) === false) {
      $errors[] = "Ekstensi file yang diizinkan adalah JPEG, JPG, PNG, atau GIF untuk file $file_name.";
    }

    if ($file_size > 2097152) {
      $errors[] = "Ukuran file $file_name tidak boleh lebih dari 2 MB.";
    }

    if (empty($errors)) {
      move_uploaded_file($file_tmp, "images/" . $file_name);
    }
  }

    if (empty($errors)) {
        echo "Semua file berhasil diunggah.";
  } else {
    echo implode(" ", $errors);
  }
}
?>
