INTERFACE="https://public-docs.live.api.otto.market/08_Receipts/v2/receipts-interface.yml"
CONFIG_FILE="./codegen.json"
CODEGEN_BIN="swagger-codegen-cli.jar"

# change to working dir
WORKING_DIR="`dirname \"$0\"`"
cd "$WORKING_DIR" || exit 1;

# download codegen if not existing
if [ ! -f "$CODEGEN_BIN" ]; then
  wget https://repo1.maven.org/maven2/io/swagger/codegen/v3/swagger-codegen-cli/3.0.23/swagger-codegen-cli-3.0.23.jar -O "$CODEGEN_BIN"
fi

# generate
java -jar "$CODEGEN_BIN" generate -l php -i "$INTERFACE" -c "$CONFIG_FILE"

# remove not required files
rm -f git_push.sh