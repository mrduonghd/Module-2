<?php

namespace App\Controller;

class PaginationController
{
    private $currentPage;
    private $limit;
    private $totalRecord;
    private $pageNumber;
    private $paramPage;

    public function __construct($currentPage, $limit, $totalRecord, $pageNumber, $paramPage)
    {
        $this->currentPage = $currentPage;
        $this->limit = $limit;
        $this->totalRecord = $totalRecord;
        $this->pageNumber = $pageNumber;
        $this->paramPage = $paramPage;
    }

    public function getCurrentPage()
    {
        $currentPage = $this->currentPage;
        if ($currentPage > $this->getTotalPage()) {
            $currentPage = $this->getTotalPage();
        } elseif ($currentPage < 1) {
            $currentPage = 1;
        }
        return $currentPage;
    }

    public function getStart()
    {
        return ($this->getCurrentPage() - 1) * $this->limit;
    }

    public function getTotalPage()
    {
        return ceil($this->totalRecord / $this->limit);
    }

    public function getPagination()
    {
        $pagination = [$this->getCurrentPage()];
        while (count($pagination) < $this->pageNumber) {
            $left = $pagination[0] - 1; // Phần tử tiếp theo ở bên trái sẽ là phần tử bên trái ở thời điểm hiện tại trừ đi 1
            $right = $pagination[count($pagination) - 1] + 1; // Phần tử tiếp theo ở bên phải sẽ là phần tử bên phải ở thời điểm hiện tại cộng với 1
            $added = false; // Biến để kiểm tra xem có trang mới được thêm vào không
            if ($left > 0) {
                array_unshift($pagination, $left); // Đẩy page mới vào đầu mảng
                $added = true;
            }
            if ($right <= $this->getTotalPage()) {
                array_push($pagination, $right); // Đẩy page mới vào cuối mảng
                $added = true;
            }
            if (!$added) { // Nếu cả bên trái lẫn bên phải đều không thể thêm phần tử nào vào nữa, thì break khỏi vòng lặp
                break;
            }
        }
        if ($this->getTotalPage() > $this->pageNumber) {

            if ($pagination[0] != $this->currentPage) { // Nếu trang ngoài cùng bên trái, mà không phải là current page, thì sẽ có nút Previous
                array_unshift($pagination, '< Previous');
            }

            if ($pagination[count($pagination) - 1] != $this->currentPage) { // Nếu trang ngoài cùng bên phải, mà không phải là current page, thì sẽ có nút Next
                array_push($pagination, 'Next >');
            }
        }
        return $pagination;
    }

    public function showPagination()
    {
        $pagination = $this->getPagination();
        $currentPage = $this->getCurrentPage();
        $count = count($pagination);
        $previous = $currentPage - 1;
        $next = $currentPage + 1;
        $data = "";
        for ($i = 0; $i < $count; $i++) {
            if ($pagination[$i] === $currentPage) {
                $data .= '<li class="page-item"><a class="page-link" href="' . $this->paramPage . '?page=' . $pagination[$i] . '" >' . $pagination[$i] . '</a></li>';

            } elseif ($pagination[$i] === '< Previous') {
                $data .= '<li class="page-item"><a class="page-link"  href="' . $this->paramPage . '?page=' . $previous . '" >< Previous</a></li>';
            } elseif ($pagination[$i] === 'Next >') {
                $data .= '<li class="page-item"><a class="page-link"  href="' . $this->paramPage . '?page=' . $next . '" >Next></a></li>';
            } else {
                $data .= '<li class="page-item"><a class="page-link" href="' . $this->paramPage . '&pagination=' . $pagination[$i] . '" >' . $pagination[$i] . '</a></li>';
            }
        }
        return $data;
    }
}


