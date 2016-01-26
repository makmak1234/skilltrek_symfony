<?php
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Blog\BlogBundle\Repository\PostRepository;
use Blog\BlogBundle\Lib\Searcher\Searcher;

$container = new ContainerBuilder();

$container
    ->register('post_repository', 'PostRepository')
    ->addFactoryService('doctrine.orm.default_entity_manager')
    ->addFactoryMethod('getRepository')
    ->addArgument('BlogBlogBundle:Post');

$container
    ->register('nsearcher', 'Searcher')
    ->addArgument(new Reference('post_repository'));

