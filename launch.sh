
docker run -d --name=grafana -p 3000:3000 grafana/grafana

docker run -d \
  --net="host" \
  --pid="host" \
  -v "/:/host:ro,rslave" \
  quay.io/prometheus/node-exporter:latest \
  --path.rootfs=/host

docker run --name prometheus -d -p 127.0.0.1:9090:9090 prom/prometheus

docker run --name cadvisor -p 8080:8080 google/cadvisor
