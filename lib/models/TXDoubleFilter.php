<?php
/**
 * Created by PhpStorm.
 * User: billge
 * Date: 15-8-3
 * Time: 上午11:50
 */
class TXDoubleFilter extends TXFilter
{
    /**
     * @var TXDoubleDAO
     */
    protected $DAO;
    protected $conds = [];

    /**
     * and 操作
     * @param $cond
     * @return TXDoubleFilter
     */
    public function filter($cond)
    {
        return new self($this->DAO, $cond, "__and__", $this->conds[0]);
    }

    /**
     * or 操作
     * @param $cond
     * @return TXDoubleFilter
     */
    public function merge($cond)
    {
        return new self($this->DAO, $cond, "__or__", $this->conds[0]);
    }
}