<?php

namespace src\Trees;


class BinarySearchTree
{
    protected $root = null;

    protected $asArray = [];

    public function insert($value)
    {
        if ($this->root == null) {
            $this->root = new Node($value);
        } else {
            $currentRoot = $this->root;
            while (true) {
                if ($currentRoot->data > $value) {
                    if ($currentRoot->left === null) {
                        $currentRoot->left = new Node($value);
                        break;
                    } else {
                        $currentRoot = $currentRoot->left;
                    }
                } elseif ($currentRoot->data < $value) {
                    if ($currentRoot->right == null) {
                        $currentRoot->right = new Node($value);
                        break;
                    } else {
                        $currentRoot = $currentRoot->right;
                    }
                } else {
                    break;
                }
            }
        }
    }

    public function inOrderTraverse($node = null)
    {
        $node = $node ?? $this->root;
        if ($node->left !== null) {
            $this->inOrderTraverse($node->left);
        }

        $this->asArray[] = $node->data;

        if ($node->right !== null) {
            $this->inOrderTraverse($node->right);
        }
        return $this->asArray;
    }

    public function PostOrderTraverse($node = null)
    {
        $node = $node ?? $this->root;
        if ($node->left !== null) {
            $this->PostOrderTraverse($node->left);
        }

        if ($node->right !== null) {
            $this->PostOrderTraverse($node->right);
        }
        $this->asArray[] = $node->data;
        return $this->asArray;
    }

    public function PreOrderTraverse($node = null)
    {
        $node = $node ?? $this->root;
        $this->asArray[] = $node->data;
        if ($node->left !== null) {
            $this->PreOrderTraverse($node->left);
        }

        if ($node->right !== null) {
            $this->PreOrderTraverse($node->right);
        }

        return $this->asArray;
    }
}