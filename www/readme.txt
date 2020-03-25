curl -OL https://github.com/google/protobuf/releases/download/v3.6.1/protoc-3.6.1-linux-x86_64.zip
unzip protoc-3.6.1-linux-x86_64.zip -d protoc3

./../protoc3/bin/protoc --proto_path=./protos  --php_out=./src  --grpc_out=./src --plugin=protoc-gen-grpc=./../grpc/bins/opt/grpc_php_plugin ./protos/helloworld.proto
./../protoc3/bin/protoc --proto_path=./protos  --php_out=./src  --grpc_out=./src --plugin=protoc-gen-grpc=./../grpc/bins/opt/grpc_php_plugin ./protos/contrived.proto

rr-grpc serve -v -d