#syntax=docker/dockerfile:1

FROM grafana:11.2.2

FROM prometheus:main

FROM node-exporter:latest

FROM cadvisor:latest


